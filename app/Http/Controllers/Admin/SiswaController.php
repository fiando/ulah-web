<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Kategori;
use App\Tingkat;
use App\OrangTua;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = User::where('level', '=', 'siswa')->orderBy('idusers', 'desc')->get();

        return view('admin.siswa.index',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $kategori = Kategori::get();
      $tingkat = Tingkat::get();
      $orang_tua = OrangTua::get();

      return view('admin.siswa.create', [
        'kategori' => $kategori,
        'tingkat' => $tingkat,
        'orang_tua' => $orang_tua,
      ]);
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
          'username_siswa' => 'required',
      ]);

      $user = new User;

      $user->nama = $request->nama;
      $user->email = $request->email;
      $user->username = $request->username;
      $user->password = $request->password;
      $user->no_telp = $request->no_telp;
      $user->alamat = $request->alamat;
      $user->idbank = $request->idbank;
      $user->no_rekening = $request->no_rekening;
      $user->status = $request->status;
      $user->level = 'siswa';

      $user->save();

      return redirect()->route('user.create')->with('success','Berhasil Menambahkan User ' . $request->nama );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
      return view('admin.user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
      $user = User::find($user->idusers);

      $user->nama = $request->nama;
      $user->email = $request->email;
      $user->username = $request->username;
      $user->no_telp = $request->no_telp;
      $user->alamat = $request->alamat;
      $user->idbank = $request->idbank;
      $user->no_rekening = $request->no_rekening;
      $user->status = $request->status;

      if ($request->password) {
        $user->password = $request->password;
      }

      $user->save();

      return redirect()->route('user.edit',['idusers' => $user->idusers])->with('success','Berhasil Mengedit User ' . $request->nama );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
      $user = User::find($user->idusers);

      $user->delete();

      return redirect('admin/user');
    }
}
