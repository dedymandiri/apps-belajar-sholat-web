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

//LARAVEL VERSI 8

Route::get('/', function () {
    return view('/admin/login/view_login');
});


Route::get('master','App\Http\Controllers\AdminController@master');

Route::get('dashboard','App\Http\Controllers\AdminController@dashboard');

//---------------------------------------------------------------------halaman DATA login dari admin lte
Route::get('view_login','App\Http\Controllers\AdminController@login');
Route::get('logout', 'App\Http\Controllers\AdminController@logout');
//---------------------------------------------------------------------batas halaman DATA login dari admin lte

//---------------------------------------------------------------------halaman DATA PENGGUNA dari admin lte
Route::get('pengguna','App\Http\Controllers\AdminController@pengguna');
//menampilkan data dari database
Route::get('pengguna','App\Http\Controllers\AdminController@lihatpengguna');
//tambah data ke database
Route::get('input_pengguna','App\Http\Controllers\AdminController@tambahpengguna');
Route::post('pengguna/storepengguna','App\Http\Controllers\AdminController@storepengguna');
//edit(update) data ke database
Route::get('edit_pengguna/{id}','App\Http\Controllers\AdminController@editpengguna');
Route::post('pengguna/update/{id}','App\Http\Controllers\AdminController@updatepengguna');
//hapus data
Route::get('pengguna/hapus/{id}','App\Http\Controllers\AdminController@hapuspengguna');
//---------------------------------------------------------------------batas halaman DATA PENGGUNA dari admin lte


//---------------------------------------------------------------------halaman DATA QUIZ dari admin lte
Route::get('quiz','App\Http\Controllers\AdminController@quiz');
//menampilkan data berita dari database
Route::get('quiz', 'App\Http\Controllers\AdminController@lihatquiz');
//tambah data berita ke database
Route::get('input_quiz', 'App\Http\Controllers\AdminController@tambahquiz');
Route::post('quiz/storequiz','App\Http\Controllers\AdminController@storequiz');
//edit(update) data berita ke database
Route::get('edit_quiz/{id}', 'App\Http\Controllers\AdminController@editquiz');
Route::post('quiz/update/{id}', 'App\Http\Controllers\AdminController@updatequiz');
//hapus data berita
Route::get('quiz/hapus/{id}','App\Http\Controllers\AdminController@hapusquiz');
//---------------------------------------------------------------------batas halaman DATA QUIZ dari admin lte

//---------------------------------------------------------------------halaman DATA data_akun dari admin lte
Route::get('data_akun','App\Http\Controllers\AdminController@data_akun');
//menampilkan data dari database
Route::get('data_akun','App\Http\Controllers\AdminController@lihatdata_akun');
//edit(update) data ke database
Route::get('edit_data_akun/{id}','App\Http\Controllers\AdminController@editdata_akun');
Route::post('data_akun/update/{id}','App\Http\Controllers\AdminController@updatedata_akun');
//---------------------------------------------------------------------batas halaman DATA data_akun dari admin lte

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
