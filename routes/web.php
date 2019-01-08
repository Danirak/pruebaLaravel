<?php

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

  Route::get('/home', 'HomeController@index')->name('home');
  Auth::routes();
  Route::get('/', 'ActividadAprendizajeServicioController@index');
  Route::get('/actividad-extension', 'ActividadExtensionController@index');
  Route::post('/actividad-extension', 'ActividadExtensionController@store')->name('actividad-extension');
