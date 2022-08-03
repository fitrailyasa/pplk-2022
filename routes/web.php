<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SuperAdmin;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Himpunan;
use App\Http\Middleware\Ukm;
use App\Http\Middleware\Kedisiplinan;
use App\Http\Middleware\DapMen;
use App\Http\Middleware\Staff;
use App\Http\Middleware\Maba;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminBegalinController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminFunfactController;
use App\Http\Controllers\Admin\AdminHimpunanController;
use App\Http\Controllers\Admin\AdminKamusGaulController;
use App\Http\Controllers\Admin\AdminUkmController;
use App\Http\Controllers\Admin\AdminUptController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminProdiController;
use App\Http\Controllers\Client\ClientBegalinController;
use App\Http\Controllers\Client\ClientBiodataController;
use App\Http\Controllers\Client\ClientJurusanController;
use App\Http\Controllers\Client\ClientKabinetController;
use App\Http\Controllers\Client\ClientKamusgaulController;
use App\Http\Controllers\Client\ClientKodeGameController;
use App\Http\Controllers\Client\ClientKeluhanController;
use App\Http\Controllers\Client\ClientProdiController;
use App\Http\Controllers\Client\ClientScannerController;
use App\Http\Controllers\Client\ClientUptController;
use App\Http\Controllers\Leaderboardcontroller;


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

// REGISTRASI
Route::get('/registrasi', function () { return view('registrasi'); });
Route::post('/registrasi/{create}', [ClientBiodataController::class, 'store'])->name('regist_staff');

// LOGIN
Route::get('/', [LoginController::class, 'showLoginForm']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login'])->name('loginPost');
Route::get('/guest', [guestController::class, 'login'])->name('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// CMS SUPER ADMIN
Route::middleware([SuperAdmin::class])->group(function () {
  Route::get('/cms-super', [AdminController::class, 'index'])->name('index');
  Route::resource('adminBegalin', AdminBegalinController::class);
  Route::resource('adminFunfact', AdminFunfactController::class);
  Route::resource('adminHimpunan', AdminHimpunanController::class);
  Route::resource('adminKamusgaul', AdminKamusGaulController::class);
  Route::resource('adminProdi', AdminProdiController::class);
  Route::resource('adminUkm', AdminUkmController::class);
  Route::resource('adminUser', AdminUserController::class);
  Route::resource('adminUpt', AdminUptController::class);

  // SCANNER
  Route::get('/scanner', [ClientScannerController::class, 'index'])->name('scanner');
  Route::get('/polling', [ClientScannerController::class, 'indexPolling'])->name('polling');
  Route::get('/presensiMaba', [ClientScannerController::class, 'indexMaba'])->name('indexMaba');
  Route::post('/presensi/{id}', [ClientScannerController::class, 'presensi']);
  Route::post('/polling/{id}', [ClientScannerController::class, 'polling']);
  Route::post('/presensiMaba/{id}', [ClientScannerController::class, 'presensiMaba']);
});

// CMS ADMIN
Route::middleware([Admin::class])->group(function () {
  Route::get('/cms-admin', [AdminController::class, 'index'])->name('index');
  Route::resource('adminBegalin', AdminBegalinController::class);
  Route::resource('adminFunfact', AdminFunfactController::class);
  Route::resource('adminKamusgaul', AdminKamusGaulController::class);
  Route::resource('adminUpt', AdminUptController::class);
});

// CMS HIMPUNAN
Route::middleware([Himpunan::class])->group(function () {
  Route::get('/cms-himpunan', [AdminController::class, 'index'])->name('index');
  Route::resource('adminHimpunan', AdminHimpunanController::class);
  Route::resource('adminProdi', AdminProdiController::class);
});

// CMS UKM
Route::middleware([Ukm::class])->group(function () {
  Route::get('/cms-ukm', [AdminController::class, 'index'])->name('index');
  Route::resource('adminUkm', AdminUkmController::class);
  Route::get('/polling', [ClientScannerController::class, 'indexPolling'])->name('polling');
  Route::post('/polling/{id}', [ClientScannerController::class, 'polling']);
});

// CMS KEDISIPLISAN
Route::middleware([Kedisiplinan::class])->group(function () {
  Route::get('/cms-kedis', [AdminController::class, 'index'])->name('index');
  // Route::resource('adminForm', AdminBegalinController::class);

  // SCANNER STAFF
  Route::get('/scanner', [ClientScannerController::class, 'index'])->name('scanner');
  Route::post('/presensi/{id}', [ClientScannerController::class, 'presensi']);
});

// CMS DAPMEN
Route::middleware([DapMen::class])->group(function () {
  Route::get('/cms-dapmen', [AdminController::class, 'index'])->name('index');
  Route::resource('adminUser', AdminUserController::class);

  // SCANNER MABA
  Route::get('/presensiMaba', [ClientScannerController::class, 'indexMaba'])->name('indexMaba');
  Route::post('/presensiMaba/{id}', [ClientScannerController::class, 'presensiMaba']);
});

// // CLIENT
Route::middleware(['auth'])->group(function () {

    // UTAMA
    Route::get('/', [ClientBegalinController::class, 'index']);
    Route::get('/beranda', [ClientBegalinController::class, 'index']);
    Route::get('/upt', [ClientUptController::class, 'index'])->name('upt');
    Route::get('/kabinet', [ClientKabinetController::class, 'index'])->name('kabinet');
    Route::get('/senat', function () { return view('client.senat'); });
    Route::get('/kamus-gaul', [ClientKamusgaulController::class, 'index'])->name('kamus-gaul');

    // BOOKLET
    Route::get('/booklet', function () { return view('client.booklet'); });

    // PPLK
    Route::get('/pplk', function () { return view('client.pplk'); });
    Route::get('/div-pplk', function () { return view('client.div-pplk'); });

    // BIODATA
    Route::get('/biodata', [ClientBiodataController::class, 'index'])->name('biodata');
    Route::get('/edit-biodata', [ClientBiodataController::class, 'indexEditBio'])->name('edit-biodata');
    Route::get('edit-fotoProfil/{id}', [ClientBiodataController::class, 'editProfil']);
    Route::put('update-fotoProfil/{id}', [ClientBiodataController::class, 'updateProfil']);
    Route::get('edit-profil/{id}', [ClientBiodataController::class, 'editBiodata']);
    Route::put('update-profil/{id}', [ClientBiodataController::class, 'updateBiodata']);

    // FORM KELUHAN
    Route::get('/form-keluhan ', [ClientKeluhanController::class, 'index'])->name('indexKeluhan');
    Route::post('/form-keluhan/{id}', [ClientKeluhanController::class, 'create'])->name('create-keluhan');

    // ORMAWA
    Route::get('/ukm', function () { return view('client.ormawa.ukm'); });
    Route::get('/himpunan', function () { return view('client.ormawa.himpunan'); });
    Route::get('/detail-himpunan', function () { return view('client.ormawa.detail-himpunan'); });
    Route::get('/jurusan', [ClientJurusanController::class, 'index'])->name('jurusan');
    Route::get('/prodi', function () { return view('client.jurusan.prodi'); });
    Route::get('/detail-prodi',)->name('detailprodi');

    // GAMES
    Route::get('/game-home', [LeaderboardController::class, 'index']);
    Route::get('/card-list', [ClientKodeGameController::class, 'index']);
    Route::get('/redeem/{no}', [ClientKodeGameController::class, 'show']);
    Route::get('/redeem-failed', function () { return view('client.games.redeem-code.failed'); });
    Route::get('/redeem-success', function () { return view('client.games.redeem-code.success'); });
    Route::post('/submitcode/{id}', [ClientKodeGameController::class, 'sumscore'])->name('sumscore');
    Route::get('/tebak-bangunan', function () { return view('client.games.tebak-bangunan.home'); });
    Route::get('/tebak-bangunan-game', function () { return view('client.games.tebak-bangunan.game'); });

    // OUR TEAM
    Route::get('/our-team', function () { return view('client.our-team'); });

});


// Route::get('/gen', [ClientBiodataController::class, 'generateAllQrCode']);
// Route::get('/hitung', [ClientBiodataController::class, 'hitunguser']);


