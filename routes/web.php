<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
  Route::get('/pre/index','index')->name('pre.index')->middleware('auth');
  Route::get('/pre/create','create')->name('pre.create')->middleware('auth');;
  Route::post('/pre','store')->name('pre.store')->middleware('auth');;
  Route::get('/pre/edit/{id}','edit')->name('pre.edit')->middleware('auth');;
  Route::post('/pre/{id}','update')->name('pre.update')->middleware('auth');;
  Route::get('/pre/{id}','destroy')->name('pre.destroy')->middleware('auth');;
  Route::get('/pre/documentos/{id}','documentos')->name('pre.documentos')->middleware('auth');;
  Route::get('/pre/','documentosup')->name('pre.documentosup')->middleware('auth');;


});
Route::controller(FichaController::class)->group(function(){
  Route::get('/Ficha/create/{id}','create')->name('Ficha.create')->middleware('auth');;
  Route::get('/Ficha/index','index')->name('Ficha.index')->middleware('auth');;
  Route::post('/Ficha','store')->name('Ficha.store')->middleware('auth');;
    Route::get('/Ficha/edit/{id}','edit')->name('Ficha.edit')->middleware('auth');;
    Route::get('/Ficha/verFR/{id}','show')->name('Ficha.verFR')->middleware('auth');;
  Route::post('/Ficha/{id}','update')->name('Ficha.update')->middleware('auth');;
  Route::get('/Ficha/{id}','destroy')->name('Ficha.destroy')->middleware('auth');;
});
Route::controller(SedesController::class)->group(function(){
  Route::get('/sedes/create','create')->name('sedes.create')->middleware('auth');;
  Route::get('/sedes/index','index')->name('sedes.index')->middleware('auth');;
  Route::post('/sedes','store')->name('sedes.store')->middleware('auth');;
    Route::get('/sedes/edit/{id}','edit')->name('sedes.edit')->middleware('auth');;
  Route::post('/sedes/{id}','update')->name('sedes.update')->middleware('auth');;
  Route::get('/sedes/{id}','destroy')->name('sedes.destroy')->middleware('auth');;
});
Route::controller(ReportesController::class)->group(function(){
  Route::get('/reportes/index','index')->name('reportes.index')->middleware('auth');;
  Route::get('/reportes/pdf7','pdf7')->name('reportes.pdf7')->middleware('auth');;
  Route::get('/reportes/pdf8','pdf8')->name('reportes.pdf8')->middleware('auth');;
  Route::get('/reportes/pdf9','pdf9')->name('reportes.pdf9')->middleware('auth');;
  Route::get('/reportes/pdf1','pdf1')->name('reportes.pdf1')->middleware('auth');;
  Route::get('/reportes/pdf2','pdf2')->name('reportes.pdf2')->middleware('auth');;
});

Route::get('/exportar/alumnos',[App\Http\Controllers\Alumnoexportcontroller::class, 'AlumnoExport']);
//Sede 1
Route::get('/exportar/alumnosSedes',[App\Http\Controllers\Alumnoexportcontroller::class, 'AlumnoSedeExport']);
Route::get('/exportar/alumnosSedes2',[App\Http\Controllers\Alumnoexportcontroller::class, 'AlumnoSedeExport2']);
Route::get('/exportar/alumnosSedes3',[App\Http\Controllers\Alumnoexportcontroller::class, 'AlumnoSedeExport3']);
Route::get('/exportar/alumnosSedes4',[App\Http\Controllers\Alumnoexportcontroller::class, 'AlumnoSedeExport4']);
//Sede 2
Route::get('/exportar/alumnosSedes11',[App\Http\Controllers\Alumnoexportcontroller::class, 'AlumnoSedeExport11']);
Route::get('/exportar/alumnosSedes12',[App\Http\Controllers\Alumnoexportcontroller::class, 'AlumnoSedeExport12']);
Route::get('/exportar/alumnosSedes13',[App\Http\Controllers\Alumnoexportcontroller::class, 'AlumnoSedeExport13']);
Route::get('/exportar/alumnosSedes14',[App\Http\Controllers\Alumnoexportcontroller::class, 'AlumnoSedeExport14']);
//Sede 3
Route::get('/exportar/alumnosSedes21',[App\Http\Controllers\Alumnoexportcontroller::class, 'AlumnoSedeExport21']);
Route::get('/exportar/alumnosSedes22',[App\Http\Controllers\Alumnoexportcontroller::class, 'AlumnoSedeExport22']);
Route::get('/exportar/alumnosSedes23',[App\Http\Controllers\Alumnoexportcontroller::class, 'AlumnoSedeExport23']);
Route::get('/exportar/alumnosSedes24',[App\Http\Controllers\Alumnoexportcontroller::class, 'AlumnoSedeExport24']);
//Sede 4
Route::get('/exportar/alumnosSedes31',[App\Http\Controllers\Alumnoexportcontroller::class, 'AlumnoSedeExport31']);
Route::get('/exportar/alumnosSedes32',[App\Http\Controllers\Alumnoexportcontroller::class, 'AlumnoSedeExport32']);
Route::get('/exportar/alumnosSedes33',[App\Http\Controllers\Alumnoexportcontroller::class, 'AlumnoSedeExport33']);
Route::get('/exportar/alumnosSedes34',[App\Http\Controllers\Alumnoexportcontroller::class, 'AlumnoSedeExport34']);
//Sede 5
Route::get('/exportar/alumnosSedes41',[App\Http\Controllers\Alumnoexportcontroller::class, 'AlumnoSedeExport41']);
Route::get('/exportar/alumnosSedes42',[App\Http\Controllers\Alumnoexportcontroller::class, 'AlumnoSedeExport42']);
Route::get('/exportar/alumnosSedes43',[App\Http\Controllers\Alumnoexportcontroller::class, 'AlumnoSedeExport43']);
Route::get('/exportar/alumnosSedes44',[App\Http\Controllers\Alumnoexportcontroller::class, 'AlumnoSedeExport44']);


Route::view('login','login')->name('login')->middleware('guest');;
Route::view('logout','logout')->name('logout');

Route::post('login',function(){

  $credentials =  request()->only('email','password');

    if(Auth::attempt($credentials)){
      request()->session()->regenerate();
      return redirect('pre/index');
    }
    else {
        return redirect('login')->with('status', 'Verifique sus credenciales.');
    }

});
Route::post('logout',function(){

    Auth::logout();
    return redirect('login');
});
