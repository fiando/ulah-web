<?php

function user_level($level) {
  switch ($level) {
    case 'siswa':
      return 'Siswa';
    case 'orang_tua':
      return 'Orang Tua';
    case 'admin':
      return 'Administrator';
    default:
      return null;
  }
}

function user_status($status) {
  switch ($status) {
    case 'aktif':
      return 'Aktif';
    case 'belum_aktif':
    case 'nonaktif':
      return 'Tidak Aktif';
    case 'pending':
      return 'Belum Konfirmasi';
    default:
      return null;
  }
}

function get_otp($no_telp, $digit = 4,$expire = 180, $key = 'key123') {
  $token = get_token();
  // $digit = 4;
  // $expire = 180;
  // $key = 'key123';

  $no_telp = '085743411430';

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "http://api.mainapi.net/smsotp/1.0.1/otp/$key/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "PUT",
    CURLOPT_POSTFIELDS => "phoneNum=$no_telp&digit=$digit&expireIn=$expire",
    CURLOPT_HTTPHEADER => array(
      "Accept: application/json",
      "Authorization: Bearer $token",
      "Cache-Control: no-cache",
      "Content-Type: application/x-www-form-urlencoded",
      "Postman-Token: 5be4b172-e57c-ef1d-441e-5d482b12e839"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    $j = json_decode($response);
    // echo $response;
    if (isset($j->status)) {
      return $j->status;
    }
    return false;
  }
}

function verifikasi_otp($optstr, $digit = 4,$expire = 180) {
  $token = get_token();
  $digit = 4;
  $expire = 180;
  $key = 'key123';

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.mainapi.net/smsotp/1.0.1/otp/$key/verifications",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "digit=$digit&otpstr=$optstr&expireIn=$expire",
    CURLOPT_HTTPHEADER => array(
      "Accept: application/json",
      "Authorization: Bearer $token",
      "Cache-Control: no-cache",
      "Content-Type: application/x-www-form-urlencoded",
      "Postman-Token: 4edb118d-58b9-7df2-5983-ef69e0dac802"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    $j = json_decode($response);
    // echo $response;
    if (isset($j->status)) {
      return $j->status;
    }
    return false;
  }
}

function get_token() {
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.mainapi.net/token",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "grant_type=client_credentials",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Basic NEU3V2NtX0RqMV94Nl90YjBUSlhYTXp2c2tVYTpFeDMwckhHT19CeHRFQ09maDI3M3FGWWp6aGth",
      "Cache-Control: no-cache",
      "Content-Type: application/x-www-form-urlencoded",
      "Postman-Token: 53026060-6bc7-c69b-21f4-b704964273b3"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    // echo "cURL Error #:" . $err;
    return false;
  } else {
    $j = json_decode($response);
    // dd($j->access_token);
    // echo $response;
    return $j->access_token;
  }
}
