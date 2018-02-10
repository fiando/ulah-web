<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IdentitasSekolah;

class IdentitasSekolahController extends Controller
{
  public function index() {
    $level = session('level');
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

    $sekolah = IdentitasSekolah::where('ididentitas_sekolah', 1)->first();
    return view('tentang-sekolah', [
      'level' => $view,
      'sekolah' => $sekolah,
    ]);
  }

  public function edit() {
    $sekolah = IdentitasSekolah::where('ididentitas_sekolah', 1)->first();

    return view('admin/identitas-sekolah/edit', ['sekolah' => $sekolah]);
  }
}
