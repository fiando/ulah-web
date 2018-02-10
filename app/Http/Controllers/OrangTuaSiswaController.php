<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrangTuaSiswaController extends Controller
{
  public function index() {
    $orang_tua = DB::table('siswa')
                ->join('orang_tua','siswa.idorang_tua','=','orang_tua.idorang_tua')
                ->join('users','orang_tua.idusers','=','users.idusers')
                ->join('bank','users.idbank','=','bank.kode')
                ->select('orang_tua.*','users.*','bank.nama as nama_bank')
                ->where('siswa.nis','=', session('id'))
                ->first();

    // dd($orang_tua);
    return view('siswa.orang-tua-siswa', ['orang_tua' => $orang_tua]);
  }
}
