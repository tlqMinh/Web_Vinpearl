<?php

use App\Http\Controllers\KhachHangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DichVuController;
use App\Http\Controllers\LoaiDichVuController;

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
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('index');
    Route::resource('khach_hangs', KhachHangController::class);
    Route::resource('loai_dich_vus', LoaiDichVuController::class);
    Route::resource('dich_vus', DichVuController::class);
});
Route::get('/', function () {
    return view('welcome');
});
