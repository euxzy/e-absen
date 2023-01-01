<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\WaliKelasController;
use App\Http\Livewire\Home;
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

// Route::get('/', Home::class);
Route::get('/', function () {
  return view('pages.home');
})->name('home');

Route::prefix('/auth')
  ->controller(AuthController::class)
  ->name('auth.')->group(function () {
    Route::get('/login', 'login')->name('login')->middleware(['noAuth']);
    Route::get('/logout', 'logout')->name('logout');
    Route::post('/login', 'authLogin')->name('login.check');
  });

Route::prefix('/dashboard')->middleware(['withAuth', 'isAdmin'])
  ->name('dashboard.')->group(function () {
    Route::prefix('admin')->controller(AdminController::class)
      ->name('admin.')->group(function () {
        Route::get('/add', 'create')->name('add');
        Route::post('/store', 'store')->name('store');
        Route::post('/update/{id}', 'update')->name('update');
      });

    Route::prefix('/siswa')->controller(SiswaController::class)
      ->name('siswa.')->group(function () {
        Route::get('/add', 'create')->name('add');
        Route::post('/store', 'store')->name('store');
        Route::get('/list', 'index')->name('list');
        Route::get('/detail/{nis}', 'detail')->name('detail');
        Route::post('/update/{nis}', 'update')->name('update');
        Route::post('/delete/{nis}', 'destroy')->name('delete');
      });

    Route::prefix('/walkel')->controller(WaliKelasController::class)
      ->name('walkel.')->group(function () {
        Route::get('/add', 'create')->name('add');
        Route::post('/store', 'store')->name('store');
        Route::get('/list', 'index')->name('list');
        Route::get('/detail/{nuptk}', 'detail')->name('detail');
        Route::post('/update/{nuptk}', 'update')->name('update');
        Route::post('/delete/{nuptk}', 'destroy')->name('delete');
      });

    Route::prefix('/kelas')->controller(KelasController::class)
      ->name('kelas.')->group(function () {
        Route::post('/store', 'store')->name('store');
      });
  });

Route::prefix('/siswa')->middleware(['withAuth'])
  ->controller(SiswaController::class)
  ->name('siswa.')->group(function () {
    // Route::get('/add', 'create')->name('add');
    // Route::post('/store', 'store')->name('store');
    Route::post('/absen', 'absen')->name('absen');
  });
