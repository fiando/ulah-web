<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Siswa;

class OrangTuaSiswaController extends Controller
{
  public function index() {
    $siswa = DB::table('siswa')
                ->join('users','siswa.idusers','=','users.idusers')
                ->join('bank','users.idbank','=','bank.kode')
                ->select('users.*','bank.nama as nama_bank','siswa.*')
                ->where('siswa.nis','=', session('nis'))
                ->first();

    $orang_tua = DB::table('orang_tua')
                ->join('users','orang_tua.idusers','=','users.idusers')
                ->join('bank','users.idbank','=','bank.kode')
                ->select('users.*','bank.nama as nama_bank')
                ->where('orang_tua.idorang_tua','=', $siswa->idorang_tua)
                ->first();

    // dd($orang_tua);
    return view('siswa.orang-tua-siswa', [
      'orang_tua' => $orang_tua,
      'siswa' => $siswa
    ]);
  }

  public function izin(Request $request) {
    $siswa = Siswa::find($request->nis);
    $siswa->akses_pembayaran = $request->akses_bayar;
    $siswa->save();
    return redirect('siswa');
  }
}
