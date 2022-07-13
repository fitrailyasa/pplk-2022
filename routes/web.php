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
    return view('client.index');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/detail-himpunan', function () {
    return view('client.ormawa.detail-himpunan');
});
Route::get('/detail-himpunan', function () {
    return view('client.ormawa.detail-himpunan');
});
Route::get('/ukm', function () {
    return view('client.ormawa.ukm');
});
Route::get('/himpunan', function () {
    return view('client.ormawa.himpunan');
});
Route::get('/jurusan', function () {
    return view('client.jurusan.jurusan');
});
Route::get('/detail-produk', function () {
    return view('client.jurusan.detail-produk');
});
Route::get('/prodi', function () {
    return view('client.jurusan.prodi');
});

