<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\BankSekolahController;
use App\Http\Controllers\BerandaOperatorController;
use App\Http\Controllers\BerandaWaliController;
use App\Http\Controllers\BiayaController;
use App\Http\Controllers\KartuSppController;
use App\Http\Controllers\KwitansiPembayaranController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WaliController;
use App\Http\Controllers\WaliMuridController;
use App\Http\Controllers\WaliMuridPembayaranController;
use App\Http\Controllers\WaliMuridTagihanController;
use App\Models\BankSekolah;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('operator')->middleware(['auth', 'auth.operator'])->group(function(){
    Route::get('beranda', [BerandaOperatorController::class, 'index'])->name('operator.beranda');
    Route::resource('user', UserController::class);
    Route::resource('wali', WaliController::class);
    Route::resource('siswa', SiswaController::class);
    Route::resource('biaya', BiayaController::class);
    Route::resource('bank', BankSekolahController::class);
    Route::resource('listbank', BankController::class);
    Route::resource('tagihan', TagihanController::class);
    Route::resource('pembayaran', PembayaranController::class);
    Route::get ('kwitansi-pembayaran/{id}', [KwitansiPembayaranController::class, 'show'])->name('kwitansipembayaran.show');
    Route::get ('kartuspp', [KartuSppController::class, 'index'])->name('kartuspp.index');;

});

    Route::get ('login-wali', [LoginController::class, 'showLoginFormWali'])->name('login.wali');



Route::prefix('admin')->middleware(['auth', 'auth.admin'])->group(function(){

});

// name('wali')-> untuk grup agar tidak lagi memanggil wali karena sudah di buat grup
Route::prefix('wali')->middleware(['auth', 'auth.wali'])->name('wali.')->group(function(){
    Route::get('beranda', [BerandaWaliController::class, 'index'])->name('beranda');
    Route::resource('siswa', WaliMuridController::class);
    Route::resource('tagihan', WaliMuridTagihanController::class);
    Route::resource('pembayaran', WaliMuridPembayaranController::class);



});


Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
})->name('logout');



