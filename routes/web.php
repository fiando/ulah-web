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
  return redirect('/login');
});

Auth::routes();

Route::get('/login', 'UserController@login')->name('login');
Route::post('/login', 'UserController@proses_login');
Route::get('/masuk_otp', 'UserController@login_otp')->middleware('cek');
Route::post('/verifikasi_otp', 'UserController@verifikasi_otp')->middleware('cek');
Route::get('/keluar', 'UserController@logout')->middleware('cek');

Route::get('/identitas-sekolah', 'IdentitasSekolahController@index')->middleware('cek','cek.otp');
Route::get('/tentang-aplikasi', 'TentangAplikasiController@index')->middleware('cek','cek.otp');
Route::post('/toggle_otp', 'UserController@toggle_otp')->middleware('cek','cek.otp');

//demo orang tua sama seperti siswa
Route::get('/pilih_siswa', 'AkunController@pilih_siswa')->middleware('cek','cek.otp');
Route::post('/pilih_siswa', 'AkunController@akses_siswa')->middleware('cek','cek.otp');

Route::middleware(['cek','cek.otp'])->group(function () {
  Route::get('/dashboard', 'AkunController@index');
  Route::get('/tagihan', 'TagihanSiswaController@index');
  Route::get('/pembayaran_tagihan', 'TagihanSiswaController@bayar_tagihan');
  Route::post('/pembayaran_tagihan/finpay', 'TagihanSiswaController@bayar_finpay');
  Route::get('/pembayaran', 'PembayaranSiswaController@index');
  Route::get('/siswa', 'OrangTuaSiswaController@index');
  Route::get('/orang-tua', 'OrangTuaSiswaController@index');
  Route::get('/akun', 'AkunController@akun');
  Route::post('/akses_pembayaran', 'OrangTuaSiswaController@izin');
});

// admin

Route::prefix('admin')->middleware('cek.admin','cek.otp')->group(function () {
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
  Route::get('/pembayaran', 'Admin\PembayaranController@index')->middleware('cek');

  Route::prefix('tagihan')->group(function () {
    Route::get('/', 'Admin\TagihanController@index')->middleware('cek')->name('tagihan');
    Route::post('/', 'Admin\TagihanController@store')->middleware('cek');
    Route::get('/tambah', 'Admin\TagihanController@tambah')->middleware('cek');
    Route::post('/tambah', 'Admin\TagihanController@store')->middleware('cek');
    Route::post('/kirim-notif', 'Admin\TagihanController@notifikasi_tagihan')->middleware('cek');
  });


});
