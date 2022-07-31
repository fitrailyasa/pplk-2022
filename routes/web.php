<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminBegalinController;
use App\Http\Controllers\Client\ClientUptController;
use App\Http\Controllers\Client\ClientProdiController;
use App\Http\Controllers\Client\ClientBegalinController;
use App\Http\Controllers\Client\ClientBiodataController;
use App\Http\Controllers\Client\ClientJurusanController;
use App\Http\Controllers\Client\ClientKabinetController;
use App\Http\Controllers\Client\ClientKamusgaulController;
use App\Http\Controllers\Client\ClientScannerController;
use App\Http\Controllers\Client\ClientKodeGameController;

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
Route::resource('adminBegali n', AdminBegalinController::class)->except(['show']);
Route::resource('adminFunfact', AdminBegalinController::class)->except(['show']);
Route::resource('adminHimpunan', AdminBegalinController::class)->except(['show']);
Route::resource('adminKamusGaul', AdminKamusGaulController::class)->except(['show']);
Route::resource('adminProdi', AdminBegalinController::class)->except(['show']);
Route::resource('adminUkm', AdminBegalinController::class)->except(['show']);
Route::resource('adminUser', AdminBegalinController::class)->except(['show']);
Route::resource('adminUpt', AdminBegalinController::class)->except(['show']);
//Login

Route::get('/', [LoginController::class, 'showLoginForm']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login'])->name('loginPost');
Route::get('/guest', [guestController::class, 'login'])->name('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/admin', [AdminController::class, 'index'])->name('cms'); //===> cms admin

//ROUTE CREATE
Route::post('/admin/Ukm', [AdminController::class, 'storeUkm'])->name('createUkm');
Route::post('/admin/Himpunan', [AdminController::class, 'storeHimpunan'])->name('createHimpunan');
Route::post('/admin/Funfact', [AdminController::class, 'storefunFact'])->name('createfunFact');
Route::post('/admin/User', [AdminController::class, 'storeUser'])->name('createUser');
Route::post('/admin/Upt', [AdminController::class, 'storeUpt'])->name('createUpt');
Route::post('/admin/Begalin', [AdminController::class, 'storeBegalin'])->name('createBegalin');
Route::post('/admin/Kamusgaul', [AdminController::class, 'storeKamusgaul'])->name('createKamusgaul');
Route::post('/admin/Prodi', [AdminController::class, 'storeProdi'])->name('createProdi');
Route::post('/registrasi/{create}', [ClientBiodataController::class, 'store'])->name('regist_staff');


//ROUTE EDIT
//Edit Funfact
Route::put('/admin/editfunFact', [AdminController::class, 'updatefunFact'])->name('editFunfact');
Route::get('/admin/updatefunFact/{id}', [AdminController::class, 'getfunFactId'])->name('viewEditFunfact');
//Edit Begalin
Route::put('/admin/editbegalin', [AdminController::class, 'updateBegalin'])->name('editBegalin');
Route::get('/admin/updatebegalin/{id}', [AdminController::class, 'getBegalinId'])->name('viewEditBegalin');
//Edit UPT
Route::put('/admin/editupt', [AdminController::class, 'updateUpt'])->name('editUpt');
Route::get('/admin/updateupt/{id}', [AdminController::class, 'getUptId'])->name('viewEditUpt');
//Edit Himpunan
Route::put('/admin/edithimpunan', [AdminController::class, 'updateHimpunan'])->name('editHimpunan');
Route::get('/admin/updatehimpunan/{id}', [AdminController::class, 'getHimpunanId'])->name('viewEditHimpunan');

//Edit Kamus Gaul
Route::put('/admin/editkamus-gaul', [AdminController::class, 'updateKamusGaul'])->name('editKamusGaul');
Route::get('/admin/updatekamus-gaul/{id}', [AdminController::class, 'getKamusGaulId'])->name('viewEditKamusGaul');


//Update UKM
Route::put('/admin/editukm', [AdminController::class, 'updateUkm'])->name('editUkm');
Route::get('/admin/updateukm/{id}', [AdminController::class, 'getUkmId'])->name('viewEditUkm');

//Update Prodi
Route::put('/admin/editprodi', [AdminController::class, 'updateProdi'])->name('editProdi');
Route::get('/admin/updateprodi/{id}', [AdminController::class, 'getProdiId'])->name('viewEditProdi');

//Delete Funfact

Route::get('/admin/hapusfunfact/{id}', [AdminController::class, 'destroyFunfact'])->name('hapusFunfact');
//Delete Upt
Route::get('/admin/hapusupt/{id}', [AdminController::class, 'destroyUpt'])->name('hapusUpt');
//Delete Begalin
Route::get('/admin/hapusbegalin/{id}', [AdminController::class, 'destroyBegalin'])->name('hapusBegalin');
//Delete KamusGaul
Route::get('/admin/hapuskamusgaul/{id}', [AdminController::class, 'destroyKamusGaul'])->name('hapusKamusGaul');
//Delete Prodi
Route::get('/admin/hapusprodi/{id}', [AdminController::class, 'destroyProdi'])->name('hapusProdi');
//Delete Himpunan
Route::get('/admin/hapushimpunan/{id}', [AdminController::class, 'destroyHimpunan'])->name('hapusHimpunan');
//Delete Ukm
Route::get('/admin/hapusukm/{id}', [AdminController::class, 'destroyUkm'])->name('hapusUkm');

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

Route::get('/detail-prodi',)->name('detailprodi');

Route::get('/beranda', [ClientBegalinController::class, 'index']); //DEFAULT

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
Route::get('/form-keluhan', function () {         // ===> form keluhan
    return view('client.form-keluhan');
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
//Route::get('/redeem', function () {               // ===> redeem page
//    return view('client.games.redeem-code.redeem');
//});
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
Route::get('/registrasi', function () {  // ===> Registrasi
    return view('registrasi');
});
Route::get('/senat', function () {  // ===> Registrasi
    return view('client.senat');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/biodata', [ClientBiodataController::class, 'index'])->name('biodata');
    Route::get('/edit-biodata', [ClientBiodataController::class, 'indexEditBio'])->name('edit-biodata');
});
