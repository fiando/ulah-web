<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pembayaran;

class TagihanSiswaController extends Controller
{
  public function index() {
    $siswa = DB::table('siswa')
                ->join('users','siswa.idusers','=','users.idusers')
                ->select('siswa.*')
                ->where('siswa.nis','=', session('nis'))
                ->first();

    $tagihan = DB::table('pembayaran')
    ->join('jenis_pembayaran', 'pembayaran.idjenis_pembayaran', '=', 'jenis_pembayaran.idjenis_pembayaran')
    ->join('tahun_pelajaran', 'pembayaran.idtahun_pelajaran', '=', 'tahun_pelajaran.idtahun_pelajaran')
    ->join('siswa', 'pembayaran.nis', '=', 'siswa.nis')
    ->join('users', 'users.idusers', '=', 'siswa.idusers')
    ->select('pembayaran.*', 'jenis_pembayaran.nama_pembayaran', 'jenis_pembayaran.nominal', 'tahun_pelajaran.tahun_pelajaran')
    ->where([
      ['pembayaran.status', '=', 'belum_lunas'],
      ['siswa.nis', '=', session('nis')],
    ])
    ->orderBy('pembayaran.tgl_tagihan','desc')
    ->get();

    $tagihan_count = $tagihan->count();
    $total_transaksi = $tagihan->sum('nominal');
    // dd($tagihan);

    return view('siswa/tagihan/index', [
      'siswa' => $siswa,
      'tagihan' => $tagihan,
      'tagihan_count' => $tagihan_count,
      'total_transaksi' => $total_transaksi,
    ]);
  }

  public function bayar_tagihan(Request $request) {
    $tagihan = DB::table('pembayaran')
    ->join('jenis_pembayaran', 'pembayaran.idjenis_pembayaran', '=', 'jenis_pembayaran.idjenis_pembayaran')
    ->join('tahun_pelajaran', 'pembayaran.idtahun_pelajaran', '=', 'tahun_pelajaran.idtahun_pelajaran')
    ->join('siswa', 'pembayaran.nis', '=', 'siswa.nis')
    ->join('users', 'users.idusers', '=', 'siswa.idusers')
    ->select('users.*','pembayaran.*', 'jenis_pembayaran.nama_pembayaran', 'jenis_pembayaran.nominal', 'tahun_pelajaran.tahun_pelajaran')
    ->where([
      ['pembayaran.idpembayaran', '=', $request->id_tagihan],
      ['siswa.nis', '=', session('nis')],
    ])
    ->orderBy('pembayaran.tgl_tagihan','desc')
    ->first();

    // dd($tagihan);

    return view('siswa/tagihan/pembayaran_tagihan', [
      'tagihan' => $tagihan,
    ]);
  }

  public function bayar_finpay(Request $request) {
    $curl = curl_init();

    $nama = $request->nama;
    $nis = $request->nis;
    $no_telp = $request->no_telp;
    // $no_telp = '085743411430';
    $nama_pembayaran = $request->nama_pembayaran;
    $tgl_tagihan = $request->tgl_tagihan;
    $nominal_format = number_format($request->nominal,0,0,'.');
    $nominal = $request->nominal;
    $tgl = date('d-m-Y');
    $pesan = "$nama, \nPembayaran \"$nama_pembayaran\" sebesar Rp.$nominal_format dilakukan pada $tgl \nTanggal tagihan : $tgl_tagihan";
    $cart_id = "ulah" . $request->id_tagihan;
    $token = get_token();

    //metode bayar
    if ($request->metode_bayar == 'trf') {
      $id = "19508";
      $pass = "Q6ZLS~KHks^rwSX7";
    }
    elseif ($request->metode_bayar == 'cc') {
      $id = "19509";
      $pass = "nkDCS-WLZg^XkzTB";
    }

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.mainapi.net/finpay/2.0.0/transactions",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "ivp_method=create&ivp_store=$id&ivp_authkey=$pass&ivp_amount=$nominal&ivp_currency=idr&ivp_test=0&ivp_cart=$cart_id&ivp_desc=$nama_pembayaran&return_auth=https%3A%2F%2Fmainapi.net%2Fauth.html&return_decl=https%3A%2F%2Fmainapi.net%2Fdecl.html&return_can=https%3A%2F%2Fmainapi.net%2Fcan.html",
      CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer $token",
        "Cache-Control: no-cache",
        "Content-Type: application/x-www-form-urlencoded",
        "Postman-Token: f7f20e1d-ad18-fb87-45cc-e03fd03490d2"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
      $request->session()->flash('pesan_flash', $err);
      // return redirect('admin/tagihan/');
    } else {
      // echo $response;
      $response_json = json_decode($response);

      if (isset($response_json->order->ref)) {
        $ref = $response_json->order->ref;
        $method = $request->metode_bayar;

        $pembayaran = Pembayaran::find($request->id_tagihan);
        $pembayaran->ref = $ref;
        $pembayaran->method = $method;
        $pembayaran->tgl_bayar = date('Y-m-d');
        $pembayaran->save();
      }
      // $request->session()->flash('pesan_flash', $response);

      return redirect($response_json->order->url);
    }
  }

  public function cek_transaksi(Request $request) {
    $id_tagihan = $request->id_tagihan;

    $pembayaran = Pembayaran::find($id_tagihan);
    $ref = $pembayaran->ref;
    $token = get_token();

    if ($pembayaran->method == 'trf') {
      $id = "19508";
      $pass = "Q6ZLS~KHks^rwSX7";
    }
    elseif ($pembayaran->method == 'cc') {
      $id = "19509";
      $pass = "nkDCS-WLZg^XkzTB";
    }

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.mainapi.net/finpay/2.0.0/check-transactions",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "ivp_method=check&ivp_store=$id&ivp_authkey=$pass&order_ref=$ref",
      CURLOPT_HTTPHEADER => array(
        "Accept: application/json",
        "Authorization: Bearer $token",
        "Cache-Control: no-cache",
        "Content-Type: application/x-www-form-urlencoded",
        "Postman-Token: 59391f4a-1c45-bc00-dd22-ecd62578d795"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      $response_json = json_decode($response);
      if (isset($response_json->order->status->code)) {
        $status = $response_json->order->status;
      }
      else {
        $status = 'Pending';
      }
    }

    $tagihan = DB::table('pembayaran')
    ->join('jenis_pembayaran', 'pembayaran.idjenis_pembayaran', '=', 'jenis_pembayaran.idjenis_pembayaran')
    ->join('tahun_pelajaran', 'pembayaran.idtahun_pelajaran', '=', 'tahun_pelajaran.idtahun_pelajaran')
    ->select('pembayaran.*', 'jenis_pembayaran.nama_pembayaran', 'jenis_pembayaran.nominal', 'tahun_pelajaran.tahun_pelajaran')
    ->where([
      ['pembayaran.idpembayaran', '=', $request->id_tagihan],
    ])
    ->first();

    // dd($tagihan);

    return view('siswa/tagihan/cek_tagihan', [
      'tagihan' => $tagihan,
      'status' => $response_json->order->status,
    ]);
  }
  public function refresh_tagihan(Request $request) {
    $id_tagihan = $request->id_tagihan;

    $pembayaran = Pembayaran::find($id_tagihan);
    $ref = $pembayaran->ref;
    $token = get_token();

    if ($pembayaran->method == 'trf') {
      $id = "19508";
      $pass = "Q6ZLS~KHks^rwSX7";
    }
    elseif ($pembayaran->method == 'cc') {
      $id = "19509";
      $pass = "nkDCS-WLZg^XkzTB";
    }

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.mainapi.net/finpay/2.0.0/check-transactions",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "ivp_method=check&ivp_store=$id&ivp_authkey=$pass&order_ref=$ref",
      CURLOPT_HTTPHEADER => array(
        "Accept: application/json",
        "Authorization: Bearer $token",
        "Cache-Control: no-cache",
        "Content-Type: application/x-www-form-urlencoded",
        "Postman-Token: 59391f4a-1c45-bc00-dd22-ecd62578d795"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      $response_json = json_decode($response);
      if (isset($response_json->order->status->code)) {
        $code = $response_json->order->status->code;
        $tagihan = Pembayaran::find($request->id_tagihan);
        if ($code == 0) {
          $tagihan->status = 'lunas';
          $tagihan->save();
        }
        elseif ($code == -1) {
          $tagihan->ref = null;
          $tagihan->method = null;
          $tagihan->tgl_bayar = null;
          $tagihan->save();
        }
      }
    }

    return redirect('tagihan');
  }
}
