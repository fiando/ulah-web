<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrangTuaController extends Controller
{
    public function index()
    {

      $siswa = DB::table('siswa')
                  ->join('users','siswa.idusers','=','users.idusers')
                  ->join('bank','users.idbank','=','bank.kode')
                  ->select('users.*','bank.nama as nama_bank')
                  ->where('siswa.nis','=', session('nis'))
                  ->first();
      // dd($siswa);

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
      $total_tagihan = $tagihan->sum('nominal');

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

      return view('orang-tua/dashboard', [
        'pembayaran_count' => $pembayaran_count,
        'total_transaksi' => $total_transaksi,
        'tagihan' => $tagihan,
        'tagihan_count' => $tagihan_count,
        'total_tagihan' => $total_transaksi,
        'siswa' => $siswa
      ]);
    }

    public function akun()
    {
      $siswa = DB::table('siswa')
                  ->join('users','siswa.idusers','=','users.idusers')
                  ->join('bank','users.idbank','=','bank.kode')
                  ->select('users.*','bank.nama as nama_bank')
                  ->where('siswa.nis','=', session('nis'))
                  ->first();
      // dd($siswa);
      return view('siswa.akun', [
        'siswa' => $siswa
      ]);
    }
}
