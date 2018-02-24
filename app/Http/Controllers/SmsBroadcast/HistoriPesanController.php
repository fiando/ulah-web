<?php

namespace App\Http\Controllers\SmsBroadcast;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BCM\Unik;
use App\BCM\HistoriPesan;

class HistoriPesanController extends Controller
{
    public function index(Request $request)
    {
      $akses = $request->akses;
      $idunik = Unik::where('akses', $akses)->first()->idunik;

      $histori = HistoriPesan::where([
        'idunik' => $idunik
      ])->get();
      return json_encode(array(
        'histori' => $histori,
      ));
    }

}
