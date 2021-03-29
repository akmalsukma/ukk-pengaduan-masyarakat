<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('pengaduan','ApiController@index');
Route::post('pengaduan/create','ApiController@TulisPengaduan');
Route::get('masyarakat','ApiController@getMasyarakat');
Route::get('tanggapan','ApiController@tanggapan');

Route::post('login','ApiController@login');
Route::get('logout', 'ApiController@logout');
Route::post('register','ApiController@register');

