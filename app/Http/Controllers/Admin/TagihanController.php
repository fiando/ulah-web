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
    ->select('pembayaran.*', 'jenis_pembayaran.nama_pembayaran', 'jenis_pembayaran.nominal', 'tahun_pelajaran.tahun_pelajaran', 'users.nama')
    ->where('pembayaran.status', 'lunas')
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
    $pembayaran = new Pembayaran;

    $pembayaran->nis = $request->nis;
    $pembayaran->tgl_tagihan = $request->tagihan;
    $pembayaran->idjenis_pembayaran = $request->jenis_pembayaran;
    $pembayaran->idtahun_pelajaran = $request->tahun_pelajaran;
    $pembayaran->status = 'belum_lunas';
    $pembayaran->tgl_bayar = '';

    $pembayaran->save();

    return redirect()->route('jenis-pembayaran.create')->with('success','Berhasil Menambahkan Jenis Pembayaran ' . $request->jenis_pembayaran );
  }
  public function notifikasi_tagihan() {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.mainapi.net/smsnotification/1.0.0/messages",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"msisdn\"\r\n\r\n085743411430\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"content\"\r\n\r\ntest\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
      CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer cff1fc047115343ca8a7530fda13600b",
        "Cache-Control: no-cache",
        "Postman-Token: b8737ea4-6ab5-f67f-4467-8541dd6bb4a8",
        "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
    }
  }
}
