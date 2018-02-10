<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangAplikasiController extends Controller
{
  public function index() {

    $level = 'siswa';
    switch ($level) {
      case 'siswa':
        $view = 'siswa';
      break;
      case 'orang_tua':
        $view = 'ortu';
      break;
      case 'admin':
        $view = 'admin';
      break;

      default:
      break;
    }

    return view('tentang-aplikasi', [
      'level' => $view
    ]);
  }
}
