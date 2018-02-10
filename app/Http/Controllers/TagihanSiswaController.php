<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagihanSiswaController extends Controller
{
  public function index() {
    $tagihan = DB::table('pembayaran')
    ->join('jenis_pembayaran', 'pembayaran.idjenis_pembayaran', '=', 'jenis_pembayaran.idjenis_pembayaran')
    ->join('tahun_pelajaran', 'pembayaran.idtahun_pelajaran', '=', 'tahun_pelajaran.idtahun_pelajaran')
    ->join('siswa', 'pembayaran.nis', '=', 'siswa.nis')
    ->join('users', 'users.idusers', '=', 'siswa.idusers')
    ->select('pembayaran.*', 'jenis_pembayaran.nama_pembayaran', 'jenis_pembayaran.nominal', 'tahun_pelajaran.tahun_pelajaran')
    ->where([
      ['pembayaran.status', '=', 'belum_lunas'],
      ['siswa.nis', '=', session('id')],
    ])
    ->orderBy('pembayaran.tgl_tagihan','desc')
    ->get();

    $tagihan_count = $tagihan->count();
    $total_transaksi = $tagihan->sum('nominal');
    // dd($tagihan);

    return view('siswa/tagihan/index', [
      'tagihan' => $tagihan,
      'tagihan_count' => $tagihan_count,
      'total_transaksi' => $total_transaksi,
    ]);
  }

  public function bayar_tagihan(Request $request) {
    // dd($request);
    $tagihan = DB::table('pembayaran')
    ->join('jenis_pembayaran', 'pembayaran.idjenis_pembayaran', '=', 'jenis_pembayaran.idjenis_pembayaran')
    ->join('tahun_pelajaran', 'pembayaran.idtahun_pelajaran', '=', 'tahun_pelajaran.idtahun_pelajaran')
    ->join('siswa', 'pembayaran.nis', '=', 'siswa.nis')
    ->join('users', 'users.idusers', '=', 'siswa.idusers')
    ->select('pembayaran.*', 'jenis_pembayaran.nama_pembayaran', 'jenis_pembayaran.nominal', 'tahun_pelajaran.tahun_pelajaran')
    ->where([
      ['pembayaran.idpembayaran', '=', $request->id_tagihan],
      ['siswa.nis', '=', session('id')],
    ])
    ->orderBy('pembayaran.tgl_tagihan','desc')
    ->first();

    // dd($tagihan);

    return view('siswa/tagihan/pembayaran_tagihan', [
      'tagihan' => $tagihan,
    ]);
  }

}
