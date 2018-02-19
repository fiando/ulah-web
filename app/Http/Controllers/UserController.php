<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
  public function login() {
    return view('login', []);
  }

  public function login_otp() {
    $user = \App\User::where('status','aktif')->find(session('id'));
    get_otp($user->no_telp);
    return view('login_otp');
  }

  public function verifikasi_otp(Request $request) {
    $verifikasi = verifikasi_otp($request->otpstr);
    if ($verifikasi) {
      $request->session()->put('otp_valid', true);
      return redirect(url(session('level')));
    }
    return view('login_otp');
  }

  public function proses_demo_login(Request $request) {
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

  public function proses_login(Request $request) {
    $email = $request->email;
    $password = $request->pass;

    // $email = 'admin2@ulah.id';
    // $password = 'ulah';

    $login = Auth::attempt(['email' => $email, 'password' => $password, 'status' => 'aktif']);

    if ($login) {
      $request->session()->put('level', Auth::user()->level);
      $request->session()->put('id', Auth::id());

      $level = session('level');

      if ($level == 'admin') {
        return redirect('admin');
      }
      elseif($level == 'siswa') {
        $request->session()->put('id', Auth::user()->username);

        $nis = DB::table('siswa')
                    ->join('users','siswa.idusers','=','users.idusers')
                    ->select('siswa.nis')
                    ->where('siswa.nis','=', Auth::user()->username)
                    ->first();

        $request->session()->put('nis', $nis->nis);
        return redirect('siswa');
      }
      elseif($level == 'orang_tua') {
        $nis = DB::table('orang_tua')
                    ->join('users','siswa.idusers','=','users.idusers')
                    ->select('siswa.nis')
                    ->where('siswa.nis','=', Auth::user()->username)
                    ->first();

        $request->session()->put('nis', $nis->nis);

        $request->session()->put('id', Auth::user()->username);

        return redirect('orang-tua');
      }
    }
    else {
      return redirect('login');
    }
  }

  public function logout(Request $request) {
    $request->session()->flush();
    return redirect('login');
  }

}
