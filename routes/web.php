<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controllers;
use \Illuminate\Http\Resource;
Route::get('/', function () {
    return view('welcome');
});


//Ruta  a create ,enlazada a un controlador de tipo recurso 
Route::Resource("usuario/create" ,'App\Http\Controllers\UsuarioController@create');

//ruta a index , controlador de tipo recurso
Route::Resource("usuarios/" ,'App\Http\Controllers\UsuarioController');



//Ruta  a create ,enlazada a un controlador de tipo recurso 

Route::Resource("empleado/create" ,'App\Http\Controllers\EmpleadoController@create');
//ruta a index , controlador de tipo recurso
Route::get("empleado/{id}/edit" ,'App\Http\Controllers\EmpleadoController@edit');
Route::delete("empleado/x/{id}" ,'App\Http\Controllers\EmpleadoController@destroy');
Route::put("empleado/x/{id}" ,'App\Http\Controllers\EmpleadoController@update');
Route::get("empleado/{id}" ,'App\Http\Controllers\EmpleadoController@show');
Route::Resource("empleado/" ,'App\Http\Controllers\EmpleadoController');



//Ruta  a create ,enlazada a un controlador de tipo recurso 

Route::Resource("producto/create" ,'App\Http\Controllers\ProductoController@create');
Route::Resource("producto/" ,'App\Http\Controllers\ProductoController');
Route::get("producto/{id}/edit" ,'App\Http\Controllers\ProductoController@edit');
Route::delete("producto/x/{id}" ,'App\Http\Controllers\ProductoController@destroy');
Route::put("producto/x/{id}" ,'App\Http\Controllers\ProductoController@update');
Route::get("producto/{id}" ,'App\Http\Controllers\ProductoController@show');


Route::Resource("proveedor/create" ,'App\Http\Controllers\ProveedorController@create');
Route::Resource("proveedor/" ,'App\Http\Controllers\ProveedorController');
Route::get("proveedor/{id}/edit" ,'App\Http\Controllers\ProveedorController@edit');
Route::delete("proveedor/x/{id}" ,'App\Http\Controllers\ProveedorController@destroy');
Route::put("proveedor/x/{id}" ,'App\Http\Controllers\ProveedorController@update');
Route::get("proveedor/{id}" ,'App\Http\Controllers\ProveedorController@show');