<?php

namespace App\Http\Controllers\SmsBroadcast;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BCM\Unik;

class UnikController extends Controller
{
  public function index()
  {
    $id = Unik::all()->count();
    $pass = md5($id.time());

    $unik = new Unik;
    $unik->akses = $pass;
    $unik->save();

    return json_encode(array(
      'akses' => $pass
    ));
  }
}
