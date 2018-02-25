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
    $user = \App\User::where('status','aktif')->find(Auth::id());
    get_otp($user->no_telp);
    return view('login_otp');
  }

  public function verifikasi_otp(Request $request) {
    $verifikasi = verifikasi_otp($request->otpstr);
    if ($verifikasi) {
      $request->session()->put('otp_valid', true);
      $level = session('level');
      if ($level == 'admin') {
        return redirect('admin');
      }
      elseif ($level == 'siswa') {
        return redirect('dashboard');
      }
      elseif ($level == 'orang_tua') {
        return redirect('pilih_siswa');
      }
    }
    return view('login_otp');
  }

  public function toggle_otp(Request $request) {
    $user = \App\User::find(Auth::id());
    $user->otp = !$user->otp;
    $user->save();
    $session = session('otp_valid');
    $request->session()->put('otp_valid', !$session);
    // dd(session('otp_valid'));

    return redirect('dashboard');
  }

  public function proses_login(Request $request) {
    $email = $request->email;
    $password = $request->pass;

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
        return redirect('dashboard');
      }
      elseif($level == 'orang_tua') {
        $request->session()->put('iduser', Auth::id());
        $request->session()->put('id', Auth::user()->username);

        return redirect('pilih_siswa');
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
