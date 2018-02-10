<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bank = Bank::orderBy('kode', 'asc')->get();
        return view('admin.bank.index',compact('bank'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.bank.create', []);
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
          'kode' => 'required',
          'nama' => 'required',
      ]);

      $bank = new Bank;

      $bank->nama = $request->nama;
      $bank->kode = $request->kode;

      $bank->save();

      return redirect()->route('bank.create')->with('success','Berhasil Menambahkan Bank' . $request->nama );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(Bank $bank)
    {
      return view('admin.bank.show',compact('bank'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(Bank $bank)
    {
        return view('admin.bank.edit', compact('bank'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bank $bank)
    {
      $bank = Bank::find($bank->kode);

      $bank->nama = $request->nama;
      $bank->kode = $request->kode;

      $bank->save();

      return redirect()->route('bank.edit',['kode' => $bank->kode])->with('success','Berhasil Mengedit Bank' . $request->nama );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bank $bank)
    {
      $bank = Bank::find($bank->kode);

      $bank->delete();

      return redirect('admin/bank');
    }
}
