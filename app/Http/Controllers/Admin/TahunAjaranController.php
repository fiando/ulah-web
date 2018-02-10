<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TahunAjaran;
use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tahun_ajaran = TahunAjaran::orderBy('idtahun_pelajaran', 'desc')->get();
        return view('admin.tahun-ajaran.index',compact('tahun_ajaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.tahun-ajaran.create', []);
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
          'tahun_pelajaran' => 'required',
      ]);

      $tahun_ajaran = new TahunAjaran;

      $tahun_ajaran->tahun_pelajaran = $request->tahun_pelajaran;

      $tahun_ajaran->save();

      return redirect()->route('tahun-ajaran.create')->with('success','Berhasil Menambahkan Tahun Ajaran Siswa ' . $request->tahun_pelajaran );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TahunAjaran  $tahun_ajaran
     * @return \Illuminate\Http\Response
     */
    public function show(TahunAjaran $tahun_ajaran)
    {
      return view('admin.tahun-ajaran.show',compact('tahun_ajaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TahunAjaran  $tahun_ajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(TahunAjaran $tahun_ajaran)
    {
        return view('admin.tahun-ajaran.edit', compact('tahun_ajaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TahunAjaran  $tahun_ajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TahunAjaran $tahun_ajaran)
    {
      $tahun_ajaran = TahunAjaran::find($tahun_ajaran->idtahun_pelajaran);

      $tahun_ajaran->tahun_pelajaran = $request->tahun_pelajaran;

      $tahun_ajaran->save();

      return redirect()->route('tahun-ajaran.edit',['idtahun_pelajaran' => $tahun_ajaran->idtahun_pelajaran])->with('success','Berhasil Mengedit TahunAjaran Siswa ' . $request->tahun_pelajaran );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TahunAjaran  $tahun_ajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(TahunAjaran $tahun_ajaran)
    {
      $tahun_ajaran = TahunAjaran::find($tahun_ajaran->idtahun_pelajaran);

      $tahun_ajaran->delete();

      return redirect('admin/tahun-ajaran');
    }
}
