<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/' , [PageController::class, 'home'])->name('home');
Route::get('/nosotros' , [PageController::class, 'about'])->name('about');
Route::get('/contacto' , [PageController::class, 'contact'])->name('contact');
Route::post('/contacto' , [PageController::class, 'sendContact'])->name('contact.send');



Route::get('/productos', [ProductoController::class,'index'])->name('productos.index');
Route::get('/productos/{product}',[ProductoController::class,'show'])->name('productos.details');
Route::get('/productos/categoria/{categoria}',[ProductoController::class,'category'])->name('productos.category');
Route::get('/procesar',function (){return view('procesar.index');})->name('procesar.index');


// Definición de la ruta de inicio de sesión para ingresar al panel de administración
// Esta ruta utiliza el método 'login' del AuthController y tiene el nombre 'login'.
// El nombre de la ruta debe ser 'login' para que el middleware de autenticación redirija aquí 
// automáticamente si un usuario no autenticado intenta acceder a una ruta protegida.
Route::get('/lv-admin', [AuthController::class, 'login'])->name('login');

