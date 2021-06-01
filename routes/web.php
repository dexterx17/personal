<?php

use App\Http\Controllers\Capacitaciones;
use App\Http\Controllers\Estudios;
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
Route::get ('/capacitaciones/edit/{capacitacion}',[Capacitaciones::class,'edit'])->name('capacitaciones.edit'); 
Route::put('/capacitaciones/{capacitacion}',[Capacitaciones::class,'update'])-> name('capacitaciones.update'); 
Route::delete ('/capacitaciones/{capacitacion}',[Capacitaciones::class,'destroy'])->name('capacitaciones.destroy'); 

Route::get ('/estudios',[Estudios::class,'index'])->name('estudios.index');
Route::get ('/estudios/create',[Estudios::class,'create'])->name('estudios.create');
Route::post('/estudios',[Estudios::class,'store'])-> name('estudios.store');
Route::get ('/estudios/edit/{estudio}',[Estudios::class,'edit'])->name('estudios.edit'); 
Route::put('/estudios/{estudio}',[Estudios::class,'update'])-> name('estudios.update'); 
Route::delete ('/estudios/{estudio}',[Estudios::class,'destroy'])->name('estudios.destroy');

//Ruta para el main.blade.php
Route::get('/main',function(){
    return view('templates.main');
  });