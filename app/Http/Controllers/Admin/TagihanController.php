<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pembayaran;

class TagihanController extends Controller
{
  public function index()
  {
    $pembayaran = DB::table('pembayaran')
    ->join('jenis_pembayaran', 'pembayaran.idjenis_pembayaran', '=', 'jenis_pembayaran.idjenis_pembayaran')
    ->join('tahun_pelajaran', 'pembayaran.idtahun_pelajaran', '=', 'tahun_pelajaran.idtahun_pelajaran')
    ->join('siswa', 'pembayaran.nis', '=', 'siswa.nis')
    ->join('users', 'siswa.idusers', '=', 'users.idusers')
    ->select('users.*','pembayaran.*', 'jenis_pembayaran.nama_pembayaran', 'jenis_pembayaran.nominal', 'tahun_pelajaran.tahun_pelajaran')
    ->where('pembayaran.status', 'belum_lunas')
    ->get();

    return view('admin/tagihan/index', ['pembayaran' => $pembayaran]);
  }
  public function tambah()
  {
    $siswa = DB::table('siswa')
    ->join('users', 'siswa.idusers', '=', 'users.idusers')
    ->get();
    $jenis_pembayaran = DB::table('jenis_pembayaran')->get();
    $tahun_pelajaran = DB::table('tahun_pelajaran')->orderBy('idtahun_pelajaran','desc')->get();


    return view('admin/tagihan/create', [
      'nis' => $siswa,
      'jenis_pembayaran' => $jenis_pembayaran,
      'tahun_pelajaran' => $tahun_pelajaran
    ]);
  }

  public function store(Request $request)
  {
    $tagihan = new Pembayaran;

    $tagihan->nis = $request->nis;
    $tagihan->tgl_tagihan = date('Y-m-d');
    $tagihan->idjenis_pembayaran = $request->jenis_pembayaran;
    $tagihan->idtahun_pelajaran = $request->tahun_pelajaran;
    $tagihan->status = 'belum_lunas';
    $tagihan->tgl_bayar = null;

    $tagihan->save();

    return redirect()->route('tagihan')->with('success','Berhasil Menambahkan Tagihan' . $request->jenis_pembayaran );
  }

  public function notifikasi_tagihan(Request $request) {
    $curl = curl_init();

    $nama = $request->nama;
    $nis = $request->nis;
    $nama_pembayaran = $request->nama_pembayaran;
    $tgl_tagihan = $request->tgl_tagihan;
    $nominal = number_format($request->nominal,0,0,'.');

    $siswa = DB::table('siswa')->where('nis',$nis)->first();
    $ortu = DB::table('orang_tua')
    ->join('siswa', 'orang_tua.idorang_tua', '=', 'siswa.idorang_tua')
    ->join('users', 'orang_tua.idusers', '=', 'users.idusers')
    ->select('users.*')
    ->where([
      ['orang_tua.idorang_tua', "=" ,$siswa->idorang_tua],
    ])
    ->first();

    $no_telp = $request->nomor;
    $no_telp_ortu = $request->nomor;
    // $no_telp = '085743411430';
    $pesan = "Nama siswa : $nama ( $nis ) \n\nAda Tagihan \"$nama_pembayaran\" sebesar Rp.$nominal yang belum terbayar, silahkan periksa tagihan.\n\nTanggal tagihan : $tgl_tagihan\n";
    $sms_token = get_token();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.mainapi.net/smsnotification/1.0.0/messages",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"msisdn\"\r\n\r\n$no_telp\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"content\"\r\n\r\n$pesan\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
      CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer $sms_token",
        "Cache-Control: no-cache",
        // "Postman-Token: a995b9af-0875-77c2-06ee-84575edb78f5",
        "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW"
      ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);

    //kirim orang-tua
    $no_telp = $no_telp_ortu;
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      // echo "cURL Error #:" . $err;
      $request->session()->flash('pesan_flash', $err);
      return redirect('admin/tagihan/');
    } else {
      // echo $response;
      $response_msg = 'Mengirim pesan';
      $response_json = json_decode($response);
      if(isset($response_json->message)) {
        $response_msg = $response_json->message;
      }
      $request->session()->flash('pesan_flash', $response_msg);
      return redirect('admin/tagihan/');
    }
  }
}
