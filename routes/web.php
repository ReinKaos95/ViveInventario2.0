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
$user=Auth::User();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/users', 'userController');

Route::resource('admin/equipment', 'equiposController');

Route::resource('admin/prestamos', 'prestamosController');

Route::resource('admin/usuariosxdepartamento', 'usuarioDepartamentosController');

/*Route::get('pdf', function(){
	$prestamo = App\PrestamoEquipo::all();
	$prestamo=App\User::all()->pluck('user');
    //$prestamo=App\Equipos::all();
 $pdf = PDF::loadView('prueba', ['prestamo' => $prestamo]);
 return $pdf->download('prueba.pdf');
});*/