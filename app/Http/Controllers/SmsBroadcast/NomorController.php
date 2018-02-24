<?php

namespace App\Http\Controllers\SmsBroadcast;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BCM\Unik;
use App\BCM\Nomor;

class NomorController extends Controller
{
  public function index(Request $request)
  {
      $akses = $request->akses;
      $idunik = Unik::where('akses', $akses)->first()->idunik;
      $nomor = Nomor::where('idunik',$idunik)->get();

      return json_encode(array(
        'nomor' => $nomor,
      ));
    }

  public function store(Request $request)
  {
    $akses = $request->akses;
    $idunik = Unik::where('akses', $akses)->first()->idunik;

    $nomor = new Nomor;
    $nomor->idkategori = $request->idkategori;
    $nomor->idunik = $idunik;
    $nomor->nomor = $nomor;
    $nomor->save();

    return json_encode($nomor);
  }

  public function show(Request $request)
  {
    $akses = $request->akses;
    $idnomor = $request->idnomor;
    $idunik = Unik::where('akses', $akses)->first()->idunik;

    $nomor = Nomor::where([
      'idunik' => $idunik,
      'idnomor' => $idnomor
      ])->get();

      // return json_encode(array(
      //   'nomor' => $nomor
      // ));
  }

  public function update(Request $request)
  {
    $akses = $request->akses;
    $idnomor = $request->idnomor;
    // $akses = 'c81e728d9d4c2f636f067f89cc14862c';
    $idunik = Unik::where('akses', $akses)->first()->idunik;

    $nomor = Nomor::find([
      'idunik' => $idunik,
      'idnomor' => $idnomor
      ])->first();

    $nomor->nomor = $request->nomor;
    $nomor->save();

      return json_encode(array(
        'nomor' => $nomor
      ));
  }

  public function destroy($id)
  {
    $akses = $request->akses;
    $idnomor = $request->idnomor;
    // $akses = 'c81e728d9d4c2f636f067f89cc14862c';
    $idunik = Unik::where('akses', $akses)->first()->idunik;

    $nomor = Nomor::where([
      'idunik' => $idunik,
      'idnomor' => $idnomor
      ])->delete();

      if ($nomor) {
        return json_encode(array(
          'status' => 'berhasil hapus'
        ));
      }
      else {
        return json_encode(array(
          'status' => 'gagal hapus'
        ));
      }
  }

  public function edit($id) { }
  public function create(Request $request) { }
}
