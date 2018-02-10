<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\JenisPembayaran;
use Illuminate\Http\Request;

class JenisPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis_pembayaran = JenisPembayaran::orderBy('nama_pembayaran', 'asc')->get();
        return view('admin.jenis-pembayaran.index',compact('jenis_pembayaran'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.jenis-pembayaran.create', []);
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
          'jenis_pembayaran' => 'required',
      ]);

      $jenis_pembayaran = new JenisPembayaran;

      $jenis_pembayaran->nama_pembayaran = $request->jenis_pembayaran;
      $jenis_pembayaran->nominal = $request->nominal;

      $jenis_pembayaran->save();

      return redirect()->route('jenis-pembayaran.create')->with('success','Berhasil Menambahkan Jenis Pembayaran ' . $request->jenis_pembayaran );


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JenisPembayaran  $jenis_pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(JenisPembayaran $jenis_pembayaran)
    {
      return view('admin.jenis-pembayaran.show',compact('jenis_pembayaran'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JenisPembayaran  $jenis_pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisPembayaran $jenis_pembayaran)
    {
        return view('admin.jenis-pembayaran.edit', compact('jenis_pembayaran'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JenisPembayaran  $jenis_pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisPembayaran $jenis_pembayaran)
    {
      $jenis_pembayaran = JenisPembayaran::find($jenis_pembayaran->idjenis_pembayaran);

      $jenis_pembayaran->nama_pembayaran = $request->jenis_pembayaran;
      $jenis_pembayaran->nominal = $request->nominal;

      $jenis_pembayaran->save();

      return redirect()->route('jenis-pembayaran.edit',['idjenis_pembayaran' => $jenis_pembayaran->idjenis_pembayaran])->with('success','Berhasil Mengedit JenisPembayaran Siswa ' . $request->jenis_pembayaran );


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JenisPembayaran  $jenis_pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisPembayaran $jenis_pembayaran)
    {
      $jenis_pembayaran = JenisPembayaran::find($jenis_pembayaran->idjenis_pembayaran);

      $jenis_pembayaran->delete();

      return redirect('admin/jenis-pembayaran');


    }
}
