<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreregistroController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\SedesController;
use App\Http\Controllers\ReportesController;
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
  Route::get('/pre/edit/{id}','edit')->name('pre.edit');
  Route::post('/pre/{id}','update')->name('pre.update');
  Route::get('/pre/{id}','destroy')->name('pre.destroy');
  Route::get('/pre/documentos/{id}','documentos')->name('pre.documentos');
  Route::get('/pre/','documentosup')->name('pre.documentosup');


});
Route::controller(FichaController::class)->group(function(){
  Route::get('/Ficha/create/{id}','create')->name('Ficha.create');
  Route::get('/Ficha/index','index')->name('Ficha.index');
  Route::post('/Ficha','store')->name('Ficha.store');
    Route::get('/Ficha/edit/{id}','edit')->name('Ficha.edit');
  Route::post('/Ficha/{id}','update')->name('Ficha.update');
  Route::get('/Ficha/{id}','destroy')->name('Ficha.destroy');
});
Route::controller(SedesController::class)->group(function(){
  Route::get('/sedes/create','create')->name('sedes.create');
  Route::get('/sedes/index','index')->name('sedes.index');
  Route::post('/sedes','store')->name('sedes.store');
    Route::get('/sedes/edit/{id}','edit')->name('sedes.edit');
  Route::post('/sedes/{id}','update')->name('sedes.update');
  Route::get('/sedes/{id}','destroy')->name('sedes.destroy');
});
Route::controller(ReportesController::class)->group(function(){
  Route::get('/reportes/index','index')->name('reportes.index');
  Route::get('/reportes/pdf7','pdf7')->name('reportes.pdf7');
  Route::get('/reportes/pdf8','pdf8')->name('reportes.pdf8');
  Route::get('/reportes/pdf9','pdf9')->name('reportes.pdf9');
  Route::get('/reportes/pdf1','pdf1')->name('reportes.pdf1');
  Route::get('/reportes/pdf2','pdf2')->name('reportes.pdf2');
});
