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
    return view('/admin/dashboard');
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



//---------------------------------------------------------------------halaman DATA BERWUDHU dari admin lte
Route::get('berwudhu','App\Http\Controllers\AdminController@wudhu');
//menampilkan data berita dari database
Route::get('berwudhu', 'App\Http\Controllers\AdminController@lihatwudhu');
//tambah data berita ke database
Route::get('input_wudhu', 'App\Http\Controllers\AdminController@tambahwudhu');
Route::post('berwudhu/storewudhu','App\Http\Controllers\AdminController@storewudhu');
//edit(update) data berita ke database
Route::get('edit_wudhu/{id}', 'App\Http\Controllers\AdminController@editwudhu');
Route::post('berwudhu/update/{id}', 'App\Http\Controllers\AdminController@updatewudhu');
//hapus data berita
Route::get('berwudhu/hapus/{id}','App\Http\Controllers\AdminController@hapuswudhu');
//---------------------------------------------------------------------batas halaman DATA BERWUDHU dari admin lte


//---------------------------------------------------------------------halaman DATA SHOLAT SUBUH dari admin lte
Route::get('sholat_subuh','App\Http\Controllers\AdminController@subuh');
//menampilkan data berita dari database
Route::get('sholat_subuh', 'App\Http\Controllers\AdminController@lihatsubuh');
//tambah data berita ke database
Route::get('input_subuh', 'App\Http\Controllers\AdminController@tambahsubuh');
Route::post('sholat_subuh/storesubuh','App\Http\Controllers\AdminController@storesubuh');
//edit(update) data berita ke database
Route::get('edit_subuh/{id}', 'App\Http\Controllers\AdminController@editsubuh');
Route::post('sholat_subuh/update/{id}', 'App\Http\Controllers\AdminController@updatesubuh');
//hapus data berita
Route::get('sholat_subuh/hapus/{id}','App\Http\Controllers\AdminController@hapussubuh');
//---------------------------------------------------------------------batas halaman DATA SHOLAT SUBUH dari admin lte



//---------------------------------------------------------------------halaman DATA SHOLAT DZUHUR dari admin lte
Route::get('sholat_dzuhur','App\Http\Controllers\AdminController@dzuhur');
//menampilkan data berita dari database
Route::get('sholat_dzuhur', 'App\Http\Controllers\AdminController@lihatdzuhur');
//tambah data berita ke database
Route::get('input_dzuhur', 'App\Http\Controllers\AdminController@tambahdzuhur');
Route::post('sholat_dzuhur/storedzuhur','App\Http\Controllers\AdminController@storedzuhur');
//edit(update) data berita ke database
Route::get('edit_dzuhur/{id}', 'App\Http\Controllers\AdminController@editdzuhur');
Route::post('sholat_dzuhur/update/{id}', 'App\Http\Controllers\AdminController@updatedzuhur');
//hapus data berita
Route::get('sholat_dzuhur/hapus/{id}','App\Http\Controllers\AdminController@hapusdzuhur');
//---------------------------------------------------------------------batas halaman DATA DZUHUR MAGHRIB dari admin lte



//---------------------------------------------------------------------halaman DATA SHOLAT ASHAR dari admin lte
Route::get('sholat_ashar','App\Http\Controllers\AdminController@ashar');
//menampilkan data berita dari database
Route::get('sholat_ashar', 'App\Http\Controllers\AdminController@lihatashar');
//tambah data berita ke database
Route::get('input_ashar', 'App\Http\Controllers\AdminController@tambahashar');
Route::post('sholat_ashar/storeashar','App\Http\Controllers\AdminController@storeashar');
//edit(update) data berita ke database
Route::get('edit_ashar/{id}', 'App\Http\Controllers\AdminController@editashar');
Route::post('sholat_ashar/update/{id}', 'App\Http\Controllers\AdminController@updateashar');
//hapus data berita
Route::get('sholat_ashar/hapus/{id}','App\Http\Controllers\AdminController@hapusashar');
//---------------------------------------------------------------------batas halaman DATA SHOLAT ASHAR dari admin lte



//---------------------------------------------------------------------halaman DATA SHOLAT MAGHRIB dari admin lte
Route::get('sholat_maghrib','App\Http\Controllers\AdminController@maghrib');
//menampilkan data berita dari database
Route::get('sholat_maghrib', 'App\Http\Controllers\AdminController@lihatmaghrib');
//tambah data berita ke database
Route::get('input_maghrib', 'App\Http\Controllers\AdminController@tambahmaghrib');
Route::post('sholat_maghrib/storemaghrib','App\Http\Controllers\AdminController@storemaghrib');
//edit(update) data berita ke database
Route::get('edit_maghrib/{id}', 'App\Http\Controllers\AdminController@editmaghrib');
Route::post('sholat_maghrib/update/{id}', 'App\Http\Controllers\AdminController@updatemaghrib');
//hapus data berita
Route::get('sholat_maghrib/hapus/{id}','App\Http\Controllers\AdminController@hapusmaghrib');
//---------------------------------------------------------------------batas halaman DATA SHOLAT MAGHRIB dari admin lte



//---------------------------------------------------------------------halaman DATA SHOLAT ISYA dari admin lte
Route::get('sholat_isya','App\Http\Controllers\AdminController@isya');
//menampilkan data berita dari database
Route::get('sholat_isya', 'App\Http\Controllers\AdminController@lihatisya');
//tambah data berita ke database
Route::get('input_isya', 'App\Http\Controllers\AdminController@tambahisya');
Route::post('sholat_isya/storeisya','App\Http\Controllers\AdminController@storeisya');
//edit(update) data berita ke database
Route::get('edit_isya/{id}', 'App\Http\Controllers\AdminController@editisya');
Route::post('sholat_isya/update/{id}', 'App\Http\Controllers\AdminController@updateisya');
//hapus data berita
Route::get('sholat_isya/hapus/{id}','App\Http\Controllers\AdminController@hapusisya');
//---------------------------------------------------------------------batas halaman DATA SHOLAT ISYA dari admin lte



//---------------------------------------------------------------------halaman DATA TENTANG KAMI dari admin lte
Route::get('tentang_kami','App\Http\Controllers\AdminController@tentang');
//menampilkan data berita dari database
Route::get('tentang_kami', 'App\Http\Controllers\AdminController@lihattentang');
//tambah data berita ke database
Route::get('input_tentang', 'App\Http\Controllers\AdminController@tambahtentang');
Route::post('tentang_kami/storetentang','App\Http\Controllers\AdminController@storetentang');
//edit(update) data berita ke database
Route::get('edit_tentang/{id}', 'App\Http\Controllers\AdminController@edittentang');
Route::post('tentang_kami/update/{id}', 'App\Http\Controllers\AdminController@updatetentang');
//hapus data berita
Route::get('tentang_kami/hapus/{id}','App\Http\Controllers\AdminController@hapustentang');
//---------------------------------------------------------------------batas halaman DATA TENTANG KAMI dari admin lte


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
