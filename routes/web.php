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
    return view('dashboard');
});

Route::get('/coa', function () {
    return view('coa');
});

Route::get('/dip', function () {
    return view('dip');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/perizinan', function () {
    return view('perizinan');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/pembersihanruangan', function () {
    return view('pembersihanruangan');
});

Route::get('/penerimaanBB', function () {
    return view('penerimaanBB');
});

Route::get('/pengolahanbatch', function () {
    return view('pengolahanbatch');
});

Route::get('/pobpabrik', function () {
    return view('pobpabrik');
});