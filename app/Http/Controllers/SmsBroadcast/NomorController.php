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
    $nomor->nomor = $request->nomor;
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
      ])->first();

      return json_encode($nomor);
  }

  public function update(Request $request)
  {
    $akses = $request->akses;
    $idnomor = $request->idnomor;
    $idunik = Unik::where('akses', $akses)->first()->idunik;

    $data_nomor = Nomor::where('idunik', $idunik)
          ->where('idnomor', $idnomor)
          ->update(['nomor' =>  $request->nomor]);
    return json_encode(array(
      'idunik' => $idunik,
      'idnomor' => $idnomor,
      'nomor' => $request->nomor
    ));
  }

  public function destroy($id, Request $request)
  {
    $akses = $request->akses;
    $idnomor = $id;
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
