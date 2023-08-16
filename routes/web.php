<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusquedaController;

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
    return view('Index');
})-> name('index');

Route::get('asesorias', function () {
    return view('Asesorias');
})-> name('asesorias');

Route::get('contactanos', function () {
    return view('Contactanos');
})-> name('contactanos');

Route::get('nosotros', function () {
    return view('Nosotros');
})-> name('nosotros');

Route::get('proyectos', function () {
    return view('Proyectos');
})-> name('proyectos');

Route::get('registro', function () {
    return view('Registro');
})-> name('registro');

Route::get('inicio_de_sesion', function () {
    return view('Inicio_de_Sesion');
})-> name('inicio_de_sesion');

Route::get('restablecer', function () {
    return view('Restablecer');
})-> name('restablecer');

Route::get('codigo', function () {
    return view('Codigo');
})-> name('codigo');

Route::get('verificar', function () {
    return view('Verificar');
})-> name('verificar');

Route::get('estado', function () {
    return view('Estado');
})-> name('estado');


Route::get('error400', function () {
    return view('Error400');
})-> name('error400');

Route::get('error402', function () {
    return view('Error402');
})-> name('error402');

Route::get('error403', function () {
    return view('Error403');
})-> name('error403');

Route::get('error404', function () {
    return view('Error404');
})-> name('error404');

Route::get('error500', function () {
    return view('Error500');
})-> name('error500');

Route::get('error503', function () {
    return view('Error503');
})-> name('error503');









Route::get('contactanos', 'App\Http\Controllers\ConsultoriaController@create')->name('consultoria.create');
Route::post('contactanos', 'App\Http\Controllers\ConsultoriaController@store')->name('consultoria.store');

Route::get('estado', 'App\Http\Controllers\BusquedaController@index')->name('estado.index');
