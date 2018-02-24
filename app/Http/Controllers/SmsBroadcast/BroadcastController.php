<?php

namespace App\Http\Controllers\SmsBroadcast;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BCM\Unik;
use App\BCM\Nomor;
use App\BCM\HistoriPesan;

class BroadcastController extends Controller
{
    public function index(Request $request)
    {
      $curl = curl_init();

      // input
      $akses = $request->akses;
      $idkategori = $request->idkategori;
      $idunik = Unik::where('akses', $akses)->first()->idunik;
      $nomor = Nomor::where([
        'idunik' => $idunik,
        'idkategori' => $idkategori
      ])->get();
      $pesan = $request->pesan;
      // $sms_token = get_token();
      $sms_token = $request->token;

      $response_arr = array();
      $err_arr = array();

      foreach ($nomor as $key => $no_telp) {
        // dd($no_telp->nomor);
        $no_telp = $no_telp->nomor;
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.mainapi.net/smsnotification/1.0.0/messages",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"msisdn\"\r\n\r\n$no_telp\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"content\"\r\n\r\n$pesan\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
          CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer $sms_token",
            "Cache-Control: no-cache",
            // "Postman-Token: a995b9af-0875-77c2-06ee-84575edb78f5",
            "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW"
          ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);

        if ($err) {
          // echo "cURL Error #:" . $err;
          array_push($err_arr, $err);
        } else {
          // echo $response;
          array_push($response_arr, $response);
        }
      }

      $histori = new HistoriPesan;
      $histori->idkategori = $request->idkategori;
      $histori->idunik = $idunik;
      $histori->pesan = $request->pesan;
      $histori->save();
      
      curl_close($curl);

      return json_encode($response_arr);
    }
}
