<?php

use App\Http\Controllers\API\AddressApiController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\API\IslandApiController;
use App\Http\Controllers\API\PatientApiController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/api/addresses', AddressApiController::class);
Route::resource('/api/patients', PatientApiController::class);
Route::resource('/api/islands', IslandApiController::class);

Route::resource('/addresses', AddressController::class);
Route::resource('/patients', PatientController::class);
