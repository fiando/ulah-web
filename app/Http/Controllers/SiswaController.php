<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
      return view('siswa/dashboard', []);
    }
    public function tagihan($value='')
    {
      return view('siswa/dashboard', []);
    }
}
