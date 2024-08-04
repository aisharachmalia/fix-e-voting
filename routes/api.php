<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PemilihLoginController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\PemilihController;
use App\Http\Controllers\SuaraController;
use App\Http\Controllers\UservotingController;
use App\Http\Controllers\DashboardController;
use App\Models\Kandidat;

use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function () {
    // Route::post('logout', [AuthController::class, 'logout']);
    // controller lainnya yang kemarin sudah dibuat simpan dibawah
    Route::resource('pemilih', PemilihController::class);
    Route::resource('suara', SuaraController::class);
    Route::resource('kandidat', KandidatController::class);
    Route::resource('uservoting', UservotingController::class);
    // teruskan
});