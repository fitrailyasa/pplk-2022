<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Client\ClientUptController;
use App\Http\Controllers\Client\ClientKamusgaulController;
use App\Http\Controllers\Client\ClientBegalinController;
use App\Http\Controllers\Client\ClientKabinetController;
use App\Http\Controllers\Client\ClientJurusanController;
use App\Http\Controllers\Client\ClientBiodataController;





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


//Login
Route::get('/', [LoginController::class, 'showLoginForm']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login'])->name('loginPost');
Route::get('/guest', [guestController::class, 'login'])->name('guest');

Route::resource('/admin', AdminController::class)->except(['show']);

Route::get('/admin', [AdminController::class, 'index'])->name('cms'); //===> cms admin

Route::post('/admin', [AdminController::class, 'store'])->name('cms-create');

Route::get('/upt', [ClientUptController::class, 'index'])->name('upt'); //===> upt

Route::get('/kabinet', [ClientKabinetController::class, 'index'])->name('kabinet');  // ===>kabinet

Route::get('/jurusan', [ClientJurusanController::class, 'index'])->name('jurusan'); // ===> jurusan

Route::get('/kamus-gaul', [ClientKamusgaulController::class, 'index'])->name('kamus-gaul');

Route::get('/biodata', [ClientBiodataController::class, 'index'])->name('biodata');

Route::get('/edit-biodata', [ClientBiodataController::class, 'indexEditBio'])->name('edit-biodata');

Route::get('/beranda', [ClientBegalinController::class, 'index'])->name('begalin'); // ===> kamus-gaul

Route::get('/detail-himpunan', function () {        // ===> Detail himpunan
    return view('client.ormawa.detail-himpunan');
});
Route::get('/ukm', function () {                    // ===> Unit kegiatan mahasiswa UKM
    return view('client.ormawa.ukm');
});
Route::get('/himpunan', function () {               // ===> himpunan
    return view('client.ormawa.himpunan');
});
Route::get('/detail-prodi', function () {          // ===> detail prodi
    return view('client.jurusan.detail-prodi');
});
Route::get('/prodi', function () {                  // ===> prodi
    return view('client.jurusan.prodi');
});
Route::get('/booklet', function () {              // ===> booklet
    return view('client.booklet');
});
Route::get('/div-pplk', function () {             // ===> divisi pplk
    return view('client.div-pplk');
});
Route::get('/form-keluhan', function () {         // ===> form keluhan
    return view('client.form-keluhan');
});
Route::get('/pplk', function () {                 // ===> pplk
    return view('client.pplk');
});
Route::get('/scanner', function () {              // ===> scanner
    return view('client.scanner');
});
Route::get('/card-list', function () {            // ===> redeem code card list
    return view('client.games.redeem-code.card-listt');
});
Route::get('/redeem-failed', function () {        // ===> redeem code failed
    return view('client.games.redeem-code.failed');
});
Route::get('/redeem', function () {               // ===> redeem page
    return view('client.games.redeem-code.redeem');
});
Route::get('/redeem-success', function () {       // ===> redeem code success
    return view('client.upt');
});
Route::get('/tebak-bangunan', function () {       // ===> tebak bangunan home
    return view('client.games.tebak-bangunan.home');
});
Route::get('/tebak-bangunan-game', function () {  // ===> tebak bangunan game
    return view('client.games.tebak-bangunan.game');
});
Route::get('/game-home', function () {            // ===> home games
    return view('client.games.games');
});
Route::get('/login', function () {  // ===> Login
    return view('login');
});
Route::get('/registrasi', function () {  // ===> Registrasi
    return view('registrasi');
});
