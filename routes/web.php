<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/login3',"PageControllerUser@postlogin");
// Route::get('admin/login', 'PageControllerAuth2@getLogin');
// Route::post('admin/login', 'PageControllerAuth@postLogin');
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',"PageControllerHome@index")->name('login');

Route::post('/login',"PageControllerUser@login");
Route::post('/register_umum',"PageControllerUser@login");
Route::post('/register_aptikom',"PageControllerUser@login");
Route::get('/logout',"PageControllerUser@logout");








Route::middleware('auth')->group(function(){
    //admin
    Route::get('/admin/dashboard',"PageControllerAdmin@index");

    //user
    Route::get('/admin/daftarAcara',"PageControllerGuest@daftarAcara");
    Route::get('/admin/pendaftaranAcara/{id}',"PageControllerGuest@pendaftaranAcara");
    Route::post('/admin/saveDaftarAcaraYoutube/{id}',"PageControllerPendaftaranAcara@saveDaftarAcaraYoutube");
    Route::get('/admin/saveDaftarAcaraZoom/{id}',"PageControllerPendaftaranAcara@saveDaftarAcaraZoom");
});

Route::middleware('is_admin')->group(function(){
    Route::get('/admin/tampilan',"PageControllerAdmin@tampilan");
    Route::post('/admin/updateTampilan',"PageControllerHome@update");
    Route::get('/admin/tampilan',"PageControllerAdmin@tampilan");
    Route::get('/admin/acara',"PageControllerAdmin@acara");
    Route::post('/admin/tambahAcara',"PageControllerAcara@tambah");
    Route::get('/admin/updateAcara/{id}',"PageControllerAdmin@updateAcara");
    Route::post('/admin/saveUpdate/{id}',"PageControllerAcara@saveUpdate");
    Route::get('/admin/hapusAcara/{id}',"PageControllerAcara@hapus");
  });


  Auth::routes([
    'register' => false,
    'login' => false,
    'home' => false,
]);


