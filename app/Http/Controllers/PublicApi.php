<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;

class PublicApi extends Controller
{
  public function tgl_indo(Request $request)
  {
    $tanggal = $request->tanggal;

  	return json_encode(tgl_indo($tanggal));
  }

  public function rupiah(Request $request)
  {
    $nominal = $request->nominal;

  	return json_encode(array('rupiah' => rupiah($nominal)));

  }

  public function get_bank(Request $request)
  {

  }

  public function daftar_bank(Request $request)
  {
  }

}
