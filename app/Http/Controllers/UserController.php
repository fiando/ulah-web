<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function login() {
    return view('login', []);
  }

  public function login_otp() {
    return view('login_otp', []);
  }

  public function proses_login_otp() {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.mainapi.net/smsotp/1.0.1/otp/key123",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "PUT",
      CURLOPT_POSTFIELDS => "phoneNum=085743411430&digit=4&expireIn=3600",
      CURLOPT_HTTPHEADER => array(
        "Accept: application/json",
        "Authorization: Bearer 95b3c09b4b124ea1afc96c08ac97b1a0",
        "Cache-Control: no-cache",
        "Content-Type: application/x-www-form-urlencoded",
        "Postman-Token: 1efaf403-371c-fb72-1267-ab302684a262"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
    }
  }

  public function proses_login(Request $request) {
    //simulasi demo login
    $request->session()->put('level', $request->level);
    $level = session('level');

    if ($level == 'admin') {
      $request->session()->put('id', '41'); //simulasi demo admin
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
