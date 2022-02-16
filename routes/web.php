<?php

use App\Http\Controllers\{Admin, AuthController};
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

Route::get('/login', [AuthController::class, 'showFormLogin'])->name("login");
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/resetpass', function () {
    return view('auth.resetpass');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/showregister', [AuthController::class, 'showFormRegister']);
    Route::post('/register', [AuthController::class, 'register']);

    Route::post('/input_coa', [Admin::class, 'tambah_coa']);
    Route::get('/coa', [Admin::class, 'tampil_coa']);
    Route::get('/hapus_coa/{id}', [Admin::class, 'hapus_coa']);

    Route::post('/input_dip', [Admin::class, 'tambah_dip']);
    Route::get('/dip', [Admin::class, 'tampil_dip']);
    Route::get('/hapus_dip/{id}', [Admin::class, 'hapus_dip']);

    Route::post('/input_perizinan', [Admin::class, 'tambah_perizinan']);
    Route::get('/perizinan', [Admin::class, 'tampil_perizinan']);
    Route::get('/hapus_perizinan/{id}', [Admin::class, 'hapus_perizinan']);

    Route::post('/input_pobpabrik', [Admin::class, 'tambah_pobpabrik']);
    Route::get('/pobpabrik', [Admin::class, 'tampil_pobpabrik']);
    Route::get('/hapus_pobpabrik/{id}', [Admin::class, 'hapus_pobpabrik']);

    Route::post('/input_catatbersih', [Admin::class, 'tambah_catatbersih']);

    Route::get('/pengolahanbatch',  [Admin::class, 'tampil_pengolahanbatch']);
    Route::post('/input_komposisi', [Admin::class, 'tambah_komposisi']);
    Route::post('/input_peralatan', [Admin::class, 'tambah_peralatan']);
    Route::post('/input_penimbangan', [Admin::class, 'tambah_penimbangan']);


    Route::get('/laporan', function () {
        return view('laporan');
    });

    Route::get('/index', function () {
        return view('index');
    })->name("home");

    Route::get('/pembersihanruangan', function () {
        return view('pembersihanruangan');
    });

    Route::get('/penerimaanBB', function () {
        return view('penerimaanBB');
    });
});
