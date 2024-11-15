<?php

use App\Http\Controllers\gastoscontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\ingresoscontroller;
use App\Http\Controllers\transaccionescontroller;

Route::get('/', Homecontroller::class)->name('home');

Route::get('/gastos', [gastoscontroller::class, 'index'])->name('gastos.index');
Route::get('/gastos/create', [gastoscontroller::class, 'create'])->name('gastos.create');
route::post('/gastos/historial', [gastoscontroller::class ,'store'])->name('gastos.store');
Route::get('/gastos/historial', [gastoscontroller::class, 'show'])->name('gastos.show');

Route::get('/ingresos', [ingresoscontroller::class, 'index'])->name('ingresos.index');
Route::get('/ingresos/create', [ingresoscontroller::class, 'create'])->name('ingresos.create');
Route::get('/ingresos/historial}', [ingresoscontroller::class, 'show'])->name('ingresos.show');
route::post('ingresos', [ingresoscontroller::class ,'store'])->name('ingresos.store');


Route::get('/transacciones', [transaccionescontroller::class, 'index'])->name('transacciones.index');
Route::get('/transacciones/{transaccione}', [transaccionescontroller::class, 'store'])->name('transacciones.store');
Route::get('/transacciones/create', [transaccionescontroller::class, 'create'])->name('transacciones.create');
Route::get('/transacciones/alerta', [transaccionescontroller::class],'show')->name('transacciones.alerta');
