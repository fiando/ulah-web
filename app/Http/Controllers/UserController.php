<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function login() {
    return view('login', []);
  }

  public function login_otp() {
    // dd(get_otp('085743411430'));
    // dd(verifikasi_otp('5598'));
    return view('login_otp', []);
  }

  public function verifikasi_otp() {

  }

  public function proses_login(Request $request) {
    //simulasi demo login
    $request->session()->put('level', $request->level);
    $level = session('level');

    if ($level == 'admin') {
      $request->session()->put('id', '42'); //simulasi demo admin
      return redirect('admin');
    }
    elseif($level == 'siswa') {
      $request->session()->put('id', '7017'); //simulasi demo siswa
      return redirect('siswa');
    }
  }

  public function logout(Request $request) {
    $request->session()->flush();
    return redirect('masuk');
  }

}
