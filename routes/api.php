<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LigaController;

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

Route::get('liga', [LigaController::class, 'index']);
Route::post('liga', [LigaController::class, 'store']);
Route::get('liga/{id}', [LigaController::class, 'show']);
Route::delete('liga/{id}', [LigaController::class, 'destroy']);
Route::put('liga/{id}', [LigaController::class, 'update']);

 