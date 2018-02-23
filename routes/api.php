<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/tgl-indo', 'PublicApi@tgl_indo');
Route::post('/rupiah', 'PublicApi@rupiah');
Route::post('/total-transaksi', 'PublicApi@total_transaksi');
Route::get('/daftar-bank', 'PublicApi@daftar_bank');
Route::get('/get-bank/{id}', 'PublicApi@get_bank');
