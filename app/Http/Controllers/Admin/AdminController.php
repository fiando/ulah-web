<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\IdentitasSekolah;
use App\Http\Controllers\PublicApi as PublicApi;

class AdminController extends Controller
{
  public function index()
  {
    $api = new PublicApi();
    $sekolah = IdentitasSekolah::where('ididentitas_sekolah', 1)->first();
    $tagihan = DB::table('pembayaran')
                ->join('jenis_pembayaran','pembayaran.idjenis_pembayaran','=','jenis_pembayaran.idjenis_pembayaran')
                ->orderBy('tgl_tagihan','desc')
                ->where('status','belum_lunas')
                ->limit(3)
                ->get();
    $tagihan_count = DB::table('pembayaran')
                ->join('jenis_pembayaran','pembayaran.idjenis_pembayaran','=','jenis_pembayaran.idjenis_pembayaran')
                ->orderBy('tgl_tagihan','desc')
                ->where('status','belum_lunas')
                ->count();
    $pembayaran = DB::table('pembayaran')
                ->join('jenis_pembayaran','pembayaran.idjenis_pembayaran','=','jenis_pembayaran.idjenis_pembayaran')
                ->orderBy('tgl_bayar','desc')
                ->where('status','lunas')
                ->limit(3)
                ->get();
    $tahun_pelajaran = DB::table('tahun_pelajaran')->orderBy('idtahun_pelajaran','desc')->first();

    return view('admin/dashboard', [
      'sekolah' => $sekolah,
      'tagihan' => $tagihan,
      'tagihan_count' => $tagihan_count,
      'pembayaran' => $pembayaran,
      'tahun_pelajaran' => $tahun_pelajaran,
    ]);
  }
}
