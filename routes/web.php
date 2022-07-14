<?php

use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Client\clientDashboardController;
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
    return view('client.index');                   // ===> default
});
Route::get('/admin', function () {                 // ===> index admin
    return view('admin.index');
});
Route::get('/detail-himpunan', function () {       // ===> detail himpunan
    return view('client.ormawa.detail-himpunan');
});
Route::get('/ukm', function () {                    // ===> ukm
    return view('client.ormawa.ukm');
});
Route::get('/himpunan', function () {               // ===> himpunan
    return view('client.ormawa.himpunan');
});
Route::get('/jurusan', function () {                // ===> jurusan
    return view('client.jurusan.jurusan');
});
Route::get('/detail-prodi', function () {          // ===> detail prodi
    return view('client.jurusan.detail-prodi');
});
Route::get('/prodi', function () {                  // ===> prodi
    return view('client.jurusan.prodi');
});
Route::get('/biodata', function () {                // ===> biodata
    return view('client.biodata.biodata');
});
Route::get('/edit-biodata', function ()   {          // ===> edit biodata
    return view('client.biodata.edit-biodata');
});
Route::get('/beranda', function ()   {               // ===> beranda
    return view('client.beranda');
});
Route::get('/booklet', function ()   {              // ===> booklet
    return view('client.booklet');
});
Route::get('/div-pplk', function ()   {             // ===> divisi pplk
    return view('client.div-pplk');
});
Route::get('/form-keluhan', function ()   {         // ===> form keluhan
    return view('client.form-keluhan');
});
Route::get('/kabinet', function ()   {              // ===> kabinet
    return view('client.kabinet');
});
Route::get('/kamus-gaul', function ()   {           // ===> kamus gaul
    return view('client.kamus-gaul');
});
Route::get('/pplk', function ()   {                 // ===> pplk
    return view('client.pplk');
});
Route::get('/scanner', function ()   {              // ===> scanner
    return view('client.scanner');
});
Route::get('/upt', function ()   {                  // ===> unit pengelolaan terpadu UPT
    return view('client.upt');
});
Route::get('/card-list', function ()   {            // ===> redeem code card list
    return view('client.games.redeem-code.card-listt');
});
Route::get('/redeem-failed', function ()   {        // ===> redeem code failed
    return view('client.games.redeem-code.failed');
});
Route::get('/redeem', function ()   {               // ===> redeem page
    return view('client.games.redeem-code.redeem');
});
Route::get('/redeem-success', function ()   {       // ===> redeem code success
    return view('client.upt');
});
Route::get('/tebak-bangunan', function ()   {       // ===> tebak bangunan home
    return view('client.games.tebak-bangunan.home');
});
Route::get('/tebak-bangunan-game', function ()   {  // ===> tebak bangunan game
    return view('client.games.tebak-bangunan.game');
});
Route::get('/game-home', function ()   {  // ===> home games
    return view('client.games.games');
});



