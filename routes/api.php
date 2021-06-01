<?php

use App\Http\Controllers\Categorias;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::apiResource('categorias',Categorias::class);
// Route::apiResource('registros',Usuarios::class);
Route::get('/categorias', [Categorias::class,'index']);
Route::post('/categorias', [Categorias::class,'store']);
Route::put('/categorias/{categoria}', [Categorias::class,'update']);
Route::delete('/categorias/{categoria}', [Categorias::class,'destroy']);

