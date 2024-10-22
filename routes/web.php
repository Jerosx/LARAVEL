<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

// Ruta para productos usando un controlador resource
Route::resource('products', ProductController::class)->middleware('auth');

Route::view("/", "home")->middleware('auth')->name('home');
Route::view("about", "about")->middleware('auth')->name('about');

// -------------- LOGIN ---------------- 
Route::view('/login' , "login")->name('login');
Route::view('/registro' , "register")->name('registro');

Route::post('/validar-registro',[LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion',[LoginController::class, 'login'])->name('inicia-sesion');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');



?>