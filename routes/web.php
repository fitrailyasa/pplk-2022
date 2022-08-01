<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminBegalinController;
use App\Http\Controllers\Admin\AdminFunfactController;
use App\Http\Controllers\Admin\AdminHimpunanController;
use App\Http\Controllers\Admin\AdminKamusGaulController;
use App\Http\Controllers\Admin\AdminUkmController;
use App\Http\Controllers\Admin\AdminUptController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminProdiController;
use App\Http\Controllers\Client\ClientUptController;
use App\Http\Controllers\Client\ClientProdiController;
use App\Http\Controllers\Client\ClientBegalinController;
use App\Http\Controllers\Client\ClientBiodataController;
use App\Http\Controllers\Client\ClientJurusanController;
use App\Http\Controllers\Client\ClientKabinetController;
use App\Http\Controllers\Client\ClientKamusgaulController;
use App\Http\Controllers\Client\ClientScannerController;
use App\Http\Controllers\Client\ClientKodeGameController;
use App\Http\Controllers\Client\ClientKeluhanController;


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


/* Auth::routes();
Route::get('/home',[HomeController::class, 'index'])->name('home'); */

//Admin Route
Route::get('/', [AdminController::class, 'index'])->name('index');
Route::resource('adminBegalin', AdminBegalinController::class)->except(['show']);
Route::resource('adminFunfact', AdminFunfactController::class)->except(['show']);
Route::resource('adminHimpunan', AdminHimpunanController::class)->except(['show']);
Route::resource('adminKamusgaul', AdminKamusGaulController::class)->except(['show']);
Route::resource('adminProdi', AdminProdiController::class)->except(['show']);
Route::resource('adminUkm', AdminUkmController::class)->except(['show']);
Route::resource('adminUser', AdminUserController::class)->except(['show']);
Route::resource('adminUpt', AdminUptController::class)->except(['show']);
//Login

Route::get('/', [LoginController::class, 'showLoginForm']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login'])->name('loginPost');
Route::get('/guest', [guestController::class, 'login'])->name('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/admin', [AdminController::class, 'index'])->name('cms'); //===> cms admin

//Reedem
Route::post('/submitcode', [ClientKodeGameController::class, 'sumscore'])->name('sumscore');


Route::get('/registrasi', function () { return view('registrasi'); });
Route::post('/registrasi/{create}', [ClientBiodataController::class, 'store'])->name('regist_staff');

Route::middleware(['auth'])->group(function () {
    //DEFAULT
    Route::get('/beranda', [ClientBegalinController::class, 'index']);

    Route::get('/biodata', [ClientBiodataController::class, 'index'])->name('biodata');
    Route::get('/edit-biodata', [ClientBiodataController::class, 'indexEditBio'])->name('edit-biodata');
    
    //post scanner
    Route::post('/presensi/{id}', [ClientScannerController::class, 'presensi']);
    Route::post('/polling/{id}', [ClientScannerController::class, 'polling']);
    Route::post('/presensiMaba/{id}', [ClientScannerController::class, 'presensiMaba']);

    //update foto profil
    Route::get('edit-fotoProfil/{id}', [ClientBiodataController::class, 'editProfil']);
    Route::put('update-fotoProfil/{id}', [ClientBiodataController::class, 'updateProfil']);

    //update biodata/user
    Route::get('edit-profil/{id}', [ClientBiodataController::class, 'editBiodata']);
    Route::put('update-profil/{id}', [ClientBiodataController::class, 'updateBiodata']);

    Route::get('/upt', [ClientUptController::class, 'index'])->name('upt'); //===> upt
    Route::get('/kabinet', [ClientKabinetController::class, 'index'])->name('kabinet');  // ===>kabinet
    Route::get('/jurusan', [ClientJurusanController::class, 'index'])->name('jurusan'); // ===> jurusan
    Route::get('/kamus-gaul', [ClientKamusgaulController::class, 'index'])->name('kamus-gaul');

    //view scanner
    Route::get('/scanner', [ClientScannerController::class, 'index'])->name('scanner');
    Route::get('/polling', [ClientScannerController::class, 'indexPolling'])->name('polling');
    Route::get('/presensiMaba', [ClientScannerController::class, 'indexMaba'])->name('indexMaba');

    Route::get('/form-keluhan ', [ClientKeluhanController::class, 'index'])->name('indexKeluhan');
    Route::post('/form-keluhan/{id}', [ClientKeluhanController::class, 'create'])->name('create-keluhan');

    Route::get('/detail-prodi',)->name('detailprodi');

    Route::get('/card-list', [ClientKodeGameController::class, 'index']); //Redeem card-list

    Route::get('/detail-himpunan', function () {        // ===> Detail himpunan
        return view('client.ormawa.detail-himpunan');
    });
    Route::get('/ukm', function () {                    // ===> Unit kegiatan mahasiswa UKM
        return view('client.ormawa.ukm');
    });
    Route::get('/himpunan', function () {               // ===> himpunan
        return view('client.ormawa.himpunan');
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
    Route::get('/pplk', function () {                 // ===> pplk
        return view('client.pplk');
    });
    Route::get('/card-list', function () {            // ===> redeem code card list
        return view('client.games.redeem-code.card-list');
    });
    Route::get('/redeem-failed', function () {        // ===> redeem code failed
        return view('client.games.redeem-code.failed');
    });
    Route::get('/redeem/{no}', [ClientKodeGameController::class, 'show']);
    Route::get('/redeem-success', function () {       // ===> redeem code success
        return view('client.games.redeem-code.success');
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
    Route::get('/senat', function () {  // ===> Registrasi
        return view('client.senat');
    });

});