<?php

use App\Http\Controllers\Capacitaciones;
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

Route::get ('/capacitaciones',[Capacitaciones::class,'index'])->name('capacitaciones.index');
Route::get ('/capacitaciones/create',[Capacitaciones::class,'create'])->name('capacitaciones.create');
Route::post('/capacitaciones',[Capacitaciones::class,'store'])-> name('capacitaciones.store');
Route::get ('/capacitaciones/edit/{capacitacion}',[Capacitaciones::class,'edit'])->name('capacitaciones.edit'); //ojo
Route::put('/capacitaciones/{capacitacion}',[Capacitaciones::class,'update'])-> name('capacitaciones.update'); //ojo
Route::delete ('/capacitaciones/{capacitacion}',[Capacitaciones::class,'destroy'])->name('capacitaciones.destroy'); //ojo

//Ruta para el main.blade.php
Route::get('/main',function(){
    return view('templates.main');
  });