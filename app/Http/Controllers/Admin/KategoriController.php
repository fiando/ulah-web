<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::orderBy('idkategori', 'desc')->get();
        return view('admin.kategori.index',compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.kategori.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'nama_kategori' => 'required',
      ]);

      $kategori = new Kategori;

      $kategori->nama_kategori = $request->nama_kategori;

      $kategori->save();

      return redirect()->route('kategori.create')->with('success','Berhasil Menambahkan Kategori Siswa ' . $request->nama_kategori );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
      return view('admin.kategori.show',compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        return view('admin.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
      $kategori = Kategori::find($kategori->idkategori);

      $kategori->nama_kategori = $request->nama_kategori;

      $kategori->save();

      return redirect()->route('kategori.edit',['idkategori' => $kategori->idkategori])->with('success','Berhasil Mengedit Kategori Siswa ' . $request->nama_kategori );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
      $kategori = Kategori::find($kategori->idkategori);

      $kategori->delete();

      return redirect('admin/kategori');
    }
}
