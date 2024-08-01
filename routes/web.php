<?php

use App\Http\Controllers\Auth\PemilihLoginController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\PemilihController;
use App\Http\Controllers\SuaraController;
use App\Http\Controllers\UservotingController;
use App\Http\Controllers\DashboardController;
use App\Models\Kandidat;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('uservoting.index');
// });

// Route untuk voting
Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['pemilih'])->group(function () {
    Route::get('/visi', function () {
        $kandidat = Kandidat::all();
        return view('uservoting.visimisi', compact('kandidat'));
    });
    Route::get('/votingpage', [UservotingController::class, 'index'])->name('voter');
    Route::get('/get-manifesto/{id}', [UservotingController::class, 'show']);
    Route::get('/success', [UservotingController::class, 'success'])->name('berhasil');
    Route::post('/vote', [UservotingController::class, 'store'])->name('vote.store');
});
// routes/web.php


Route::get('/kandidat/{id}', [KandidatController::class, 'show'])->name('kandidat.show');
Route::get('/kandidat', [KandidatController::class, 'index'])->name('kandidat.index');
Route::get('/kandidat/{id}/edit', [KandidatController::class, 'edit'])->name('kandidat.edit');


Route::get('pemilih/login', [PemilihLoginController::class, 'showLoginForm'])->name('pemilih.login');
Route::post('pemilih/login', [PemilihLoginController::class, 'login'])->name('pemilih.login.submit');
Route::post('pemilih/logout', [PemilihLoginController::class, 'logout'])->name('pemilih.logout');

// Route::get('/admin', function () {
//     return view('layouts.backend');
// })->middleware('auth');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('dashboard',[DashboardController::class, 'index']);
    Route::resource('kandidat', KandidatController::class);
    Route::resource('pemilih', PemilihController::class);
    Route::resource('suara', SuaraController::class);
});
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/get-manifesto/{id}', [KandidatController::class, 'getManifesto'])->name('kandidat.getManifesto');



Route::middleware(['pemilih'])->group(function () {
    Route::get('/uservoting', [UservotingController::class, 'index'])->name('uservoting.index');
    Route::post('/vote/store', [UservotingController::class, 'store'])->name('vote.store');
    Route::get('/uservoting/{id}', [UservotingController::class, 'index'])->name('uservoting.show');
});
