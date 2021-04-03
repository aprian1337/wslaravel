<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelolaController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/login', [AuthController::class, 'index'])->name('auth.index');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::prefix('admin')->middleware('auth.admin')->group(function(){
    Route::get('kelola', [KelolaController::class, 'index'])->name('admin.kelola.index');
    Route::get('kelola/create', [KelolaController::class, 'create'])->name('admin.kelola.create');
    Route::post('kelola/store', [KelolaController::class, 'store'])->name('admin.kelola.store');
    Route::get('kelola/edit/{id}', [KelolaController::class, 'edit'])->name('admin.kelola.edit');
    Route::put('kelola/update/{id}', [KelolaController::class, 'update'])->name('admin.kelola.update');
    Route::delete('kelola/destroy/{id}', [KelolaController::class, 'destroy'])->name('admin.kelola.destroy');
    Route::resource('manage', KelolaController::class);
});