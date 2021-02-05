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
Route::get('/', function () {
    return view('auth.login');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/users', 'userController');

Route::resource('admin/equipment', 'equiposController');

Route::resource('admin/auditorias', 'auditoriaController');

Route::resource('admin/prestamos', 'prestamosController');

Route::resource('admin/usuariosxdepartamento', 'usuarioDepartamentosController');

Route::get('invoice', 'prestamosController@exportInvoice')->name('invoice.pdf');
