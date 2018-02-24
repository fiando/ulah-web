<?php

namespace App\Http\Controllers\SmsBroadcast;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BCM\Unik;
use App\BCM\Kategori;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        $akses = $request->akses;
        $idunik = Unik::where('akses', $akses)->first()->idunik;

        $kategori = Kategori::where([
          'idunik' => $idunik
        ])->get();
        return json_encode(array(
          'kategori' => $kategori,
        ));
      }

    public function store(Request $request)
    {
      $akses = $request->akses;
      $idunik = Unik::where('akses', $akses)->first()->idunik;

      $kategori = new Kategori;
      $kategori->nama = $request->nama;
      $kategori->idunik = $idunik;
      $kategori->save();

      return json_encode(array(
        'nama' => $request->nama,
        'idunik' => $idunik
      ));
    }

    public function show(Request $request)
    {
      $akses = $request->akses;
      $idkategori = $request->idkategori;
      // $akses = 'c81e728d9d4c2f636f067f89cc14862c';
      $idunik = Unik::where('akses', $akses)->first()->idunik;

      $kategori = Kategori::where([
        'idunik' => $idunik,
        'idkategori' => $idkategori
        ])->get();

        return json_encode(array(
          'kategori' => $kategori
        ));
    }

    public function update(Request $request)
    {
      $akses = $request->akses;
      $idkategori = $request->idkategori;
      $idunik = Unik::where('akses', $akses)->first()->idunik;

      $kategori = Kategori::find([
        'idunik' => $idunik,
        'idkategori' => $idkategori
        ])->first();

      $kategori->nama = $request->nama;
      $kategori->save();

        return json_encode(array(
          'kategori' => $kategori
        ));
    }

    public function destroy($id, Request $request)
    {
      $akses = $request->akses;
      $idkategori = $id;
      $idunik = Unik::where('akses', $akses)->first()->idunik;

      $kategori = Kategori::where([
        'idunik' => $idunik,
        'idkategori' => $idkategori
        ])->delete();

        if ($kategori) {
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

    public function edit($id) {}
    public function create(Request $request) {}
}
