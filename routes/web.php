<?php

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
    return view('index');
})->name('index');

Route::get('/login', function () {
    return view('login');
});

Route::get('/lista_proveedores', function () {
    return view('lista_proveedores');
})->name('proveedor');

Route::get('/registrar_prov', function () {
    return view('registrar_prov');
})->name('proveedor.reg');

Route::get('/actualizar_prov', function () {
    return view('actualizar_prov');
})->name('proveedor.act');

Route::get('/papelera_prov', function () {
    return view('papelera_prov');
})->name('proveedor.pap');

Route::get('/lista_productos', function () {
    return view('lista_productos');
})->name('producto');

Route::get('/registrar_prod', function () {
    return view('registrar_prod');
})->name('producto.reg');

Route::get('/actualizar_prod', function () {
    return view('actualizar_prod');
})->name('producto.act');

Route::get('/papelera_prod', function () {
    return view('papelera_prod');
})->name('producto.pap');

Route::get('/lista_medidas', function () {
    return view('lista_medidas');
})->name('medida');

Route::get('/registrar_med', function () {
    return view('registrar_med');
})->name('medida.reg');

Route::get('/actualizar_med', function () {
    return view('actualizar_med');
})->name('medida.act');

Route::get('/papelera_med', function () {
    return view('papelera_med');
})->name('medida.pap');

Route::get('/lista_orden', function () {
    return view('lista_orden');
})->name('orden');

Route::get('/registrar_ord', function () {
    return view('registrar_ord');
})->name('orden.reg');

Route::get('/actualizar_ord', function () {
    return view('actualizar_ord');
})->name('orden.act');

Route::get('/papelera_ord', function () {
    return view('papelera_ord');
})->name('orden.pap');

Route::get('/lista_devoluciones', function () {
    return view('lista_devoluciones');
})->name('devolucion');

Route::get('/registrar_dev', function () {
    return view('registrar_dev');
})->name('devolucion.reg');

Route::get('/actualizar_dev', function () {
    return view('actualizar_dev');
})->name('devolucion.act');

Route::get('/papelera_dev', function () {
    return view('papelera_dev');
})->name('devolucion.pap');