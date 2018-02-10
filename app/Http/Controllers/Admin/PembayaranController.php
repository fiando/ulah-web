<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pembayaran;

class PembayaranController extends Controller
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
    // dd($pembayaran);
  return view('admin/pembayaran', ['pembayaran' => $pembayaran]);
  }
}
