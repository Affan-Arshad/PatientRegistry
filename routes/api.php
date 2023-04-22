<?php

use App\Http\Controllers\API\AddressController;
use App\Http\Controllers\API\IslandController;
use App\Http\Controllers\API\PatientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/addresses', AddressController::class);
Route::resource('/patients', PatientController::class);
Route::resource('/islands', IslandController::class);

Route::any('/{any}', function() {
    return abort(404);
})->where('any', '.*');
