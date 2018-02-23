<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembayaranSiswaController extends Controller
{
  public function index() {
    $pembayaran = DB::table('pembayaran')
                ->join('jenis_pembayaran', 'pembayaran.idjenis_pembayaran', '=', 'jenis_pembayaran.idjenis_pembayaran')
                ->join('tahun_pelajaran', 'pembayaran.idtahun_pelajaran', '=', 'tahun_pelajaran.idtahun_pelajaran')
                ->join('siswa', 'pembayaran.nis', '=', 'siswa.nis')
                ->join('users', 'users.idusers', '=', 'siswa.idusers')
                ->select('pembayaran.*', 'jenis_pembayaran.nama_pembayaran', 'jenis_pembayaran.nominal', 'tahun_pelajaran.tahun_pelajaran')
                ->where([
                  ['pembayaran.status', '=', 'lunas'],
                  ['siswa.nis', '=', session('nis')],
                ])
                ->get();

    $pembayaran_count = $pembayaran->count();
    $total_transaksi = $pembayaran->sum('nominal');
    // dd($total_transaksi);

    return view('siswa/pembayaran', [
      'pembayaran' => $pembayaran,
      'pembayaran_count' => $pembayaran_count,
      'total_transaksi' => $total_transaksi,
    ]);
  }
}
