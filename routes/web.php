<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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
});

Route::prefix('/auth')
  ->controller(AuthController::class)
  ->name('auth.')->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authLogin')->name('login.check');
  });

Route::prefix('/admin')
  ->controller(AdminController::class)
  ->name('admin.')->group(function () {
    Route::get('/add', 'create')->name('add');
    Route::post('/store', 'store')->name('store');
  });
