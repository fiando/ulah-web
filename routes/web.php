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

// Route::get('/masuk', 'UserController@login');
Route::get('masuk', 'Auth\LoginController@showLoginForm')->name('masuk');
Route::post('masuk', 'Auth\LoginController@login');

Route::get('/masuk_otp', 'UserController@login_otp');
Route::post('/verifikasi_otp', 'UserController@verifikasi_otp');
Route::post('/masuk', 'UserController@proses_login');
Route::get('/keluar', 'UserController@logout')->middleware('cek');

Route::get('/identitas-sekolah', 'IdentitasSekolahController@index')->middleware('cek');
Route::get('/tentang-aplikasi', 'TentangAplikasiController@index')->middleware('cek');

Route::prefix('siswa')->middleware('cek.siswa')->group(function () {
  Route::get('/', 'SiswaController@index');
  Route::get('/tagihan', 'TagihanSiswaController@index');
  Route::get('/pembayaran_tagihan', 'TagihanSiswaController@bayar_tagihan');
  Route::post('/pembayaran_tagihan/finpaycc', 'TagihanSiswaController@bayar_finpaycc');
  Route::get('/pembayaran', 'PembayaranSiswaController@index');
  Route::get('/orang-tua', 'OrangTuaSiswaController@index');
  Route::get('/akun', 'SiswaController@akun');
});

//demo orang tua sama seperti siswa
Route::prefix('ortu')->middleware('cek')->group(function () {
  Route::get('/', 'SiswaController@index');
  Route::get('/tagihan', 'TagihanSiswaController@index');
  Route::post('/pembayaran_tagihan', 'TagihanSiswaController@bayar_tagihan');
  Route::get('/pembayaran', 'PembayaranSiswaController@index');
  Route::get('/orang-tua', 'OrangTuaSiswaController@index');
  Route::get('/akun', 'SiswaController@akun');
});

Route::prefix('admin')->middleware('cek.admin')->group(function () {
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

  Route::get('/identitas-sekolah/edit', 'IdentitasSekolahController@edit')->middleware('cek');
  Route::get('/tagihan', 'Admin\TagihanController@index')->middleware('cek')->name('tagihan');
  Route::post('/tagihan/kirim-notif', 'Admin\TagihanController@notifikasi_tagihan')->middleware('cek');
  Route::post('/tagihan', 'Admin\TagihanController@store')->middleware('cek');
  Route::get('/tagihan/tambah', 'Admin\TagihanController@tambah')->middleware('cek');
  Route::get('/pembayaran', 'Admin\PembayaranController@index')->middleware('cek');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
