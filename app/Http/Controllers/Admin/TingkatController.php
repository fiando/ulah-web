<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tingkat;
use Illuminate\Http\Request;

class TingkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tingkat = Tingkat::orderBy('idtingkat', 'desc')->get();
        return view('admin.tingkat.index',compact('tingkat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.tingkat.create', []);
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
          'nama_tingkat' => 'required',
      ]);

      $tingkat = new Tingkat;

      $tingkat->nama_tingkat = $request->nama_tingkat;

      $tingkat->save();

      return redirect()->route('tingkat.create')->with('success','Berhasil Menambahkan Tingkat Siswa ' . $request->nama_tingkat );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tingkat  $tingkat
     * @return \Illuminate\Http\Response
     */
    public function show(Tingkat $tingkat)
    {
      return view('admin.tingkat.show',compact('tingkat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tingkat  $tingkat
     * @return \Illuminate\Http\Response
     */
    public function edit(Tingkat $tingkat)
    {
        return view('admin.tingkat.edit', compact('tingkat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tingkat  $tingkat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tingkat $tingkat)
    {
      $tingkat = Tingkat::find($tingkat->idtingkat);

      $tingkat->nama_tingkat = $request->nama_tingkat;

      $tingkat->save();

      return redirect()->route('tingkat.edit',['idtingkat' => $tingkat->idtingkat])->with('success','Berhasil Mengedit Tingkat Siswa ' . $request->nama_tingkat );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tingkat  $tingkat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tingkat $tingkat)
    {
      $tingkat = Tingkat::find($tingkat->idtingkat);

      $tingkat->delete();

      return redirect('admin/tingkat');
    }
}
