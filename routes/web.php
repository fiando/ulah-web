<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return redirect('/masuk');
});

Route::get('/masuk', 'UserController@login');
Route::get('/masuk_otp', 'UserController@login_otp');
Route::post('/masuk', 'UserController@proses_login');
Route::get('/keluar', 'UserController@logout');
;
Route::get('/identitas-sekolah', 'IdentitasSekolahController@index');
Route::get('/tentang-aplikasi', 'TentangAplikasiController@index');

Route::prefix('siswa')->group(function () {
  Route::get('/', 'SiswaController@index');
  Route::get('/tagihan', 'TagihanSiswaController@index');
  Route::post('/pembayaran_tagihan', 'TagihanSiswaController@bayar_tagihan');
  Route::get('/pembayaran', 'PembayaranSiswaController@index');
  Route::get('/orang-tua', 'OrangTuaSiswaController@index');
  Route::get('/akun', 'SiswaController@akun');
});

//demo orang tua sama seperti siswa
Route::prefix('ortu')->group(function () {
  Route::get('/', 'SiswaController@index');
  Route::get('/tagihan', 'TagihanSiswaController@index');
  Route::post('/pembayaran_tagihan', 'TagihanSiswaController@bayar_tagihan');
  Route::get('/pembayaran', 'PembayaranSiswaController@index');
  Route::get('/orang-tua', 'OrangTuaSiswaController@index');
  Route::get('/akun', 'SiswaController@akun');
});

Route::prefix('admin')->group(function () {
  Route::get('/', 'Admin\AdminController@index');

  Route::resources([
      'kategori' => 'Admin\KategoriController',
      'tingkat' => 'Admin\TingkatController',
      'tahun-ajaran' => 'Admin\TahunAjaranController',
      'jenis-pembayaran' => 'Admin\JenisPembayaranController',
      'bank' => 'Admin\BankController',
      'user' => 'Admin\UserController',
      'siswa' => 'Admin\SiswaController',
      'orang-tua' => 'Admin\OrangTuaController',
  ]);

  Route::get('/identitas-sekolah/edit', 'IdentitasSekolahController@edit');
  Route::get('/tagihan', 'Admin\TagihanController@index');
  Route::post('/tagihan', 'Admin\TagihanController@store');
  Route::get('/tagihan/tambah', 'Admin\TagihanController@tambah');
  Route::get('/pembayaran', 'Admin\PembayaranController@index');
});

// Auth::routes();
