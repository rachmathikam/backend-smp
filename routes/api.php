<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\{EskulController,SiswaController,
    GuruController,MapelController,NilaiController,RaportController};

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
Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
//API route for login user
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/home', function(Request $request) {
        return auth()->user();
    });

    // API route for logout user
    Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);

    //Route Master
    Route::resource('eskul', EskulController::class)->except('create');
    Route::resource('siswas', SiswaController::class)->except('create');
    Route::resource('mapel', MapelController::class)->except('create');
    Route::resource('raport', RaportController::class)->except('create');
    Route::resource('nilai', NilaiController::class)->except('create');
    Route::resource('gurus', GuruController::class)->except('create');

});
