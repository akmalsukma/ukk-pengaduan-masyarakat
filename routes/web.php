<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('landingpage');

Auth::routes();


Route::get('/pengaduans', 'MasyarakatController@pengaduan')->name('dashboardmasyarakat');
Route::get('/pengaduan/list', 'MasyarakatController@index')->name('listpengaduan');
route::post('/pengaduan/store','MasyarakatController@store')->name('nulispengaduan');




Route::get('/admin', 'HomeController@dashboardAdmin')->name('dashboardadmin');
Route::get('/admin/user', 'AdminController@user')->name('listuser');
Route::get('/admin/pengaduan', 'AdminController@pengaduan')->name('listpengaduan');

Route::get('/petugas', 'HomeController@dashboardPetugas')->name('dashboardpetugas');
