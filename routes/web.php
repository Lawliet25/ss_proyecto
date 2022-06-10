<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreregistroController;
use App\Http\Controllers\FichaController;
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
Route::controller(PreregistroController::class)->group(function(){
  Route::get('/pre/index','index')->name('pre.index');
  Route::get('/pre/create','create')->name('pre.create');
  Route::post('/pre','store')->name('pre.store');

});
Route::controller(FichaController::class)->group(function(){
  Route::get('/Ficha/Fichagrande','create')->name('Ficha.Fichagrande');

});
