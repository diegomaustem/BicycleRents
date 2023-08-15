<?php

use App\Http\Controllers\BicycleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('bicycles',         [BicycleController::class, 'getAllBicycles']);
Route::get('bicycles/{id}',    [BicycleController::class, 'getBicycle']);
Route::post('bicycles',        [BicycleController::class, 'createBicycles']);
Route::put('bicycles/{id}',    [BicycleController::class, 'updateBicycle']);
Route::delete('bicycles/{id}', [BicycleController::class, 'deleteBicycle']);
