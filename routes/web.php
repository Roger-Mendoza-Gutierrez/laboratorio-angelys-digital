<?php

use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Agrupar rutas con middleware de autenticación PROTEGIDO
Route::middleware(['auth'])->group(
    function () {
        // Documentos
        Route::resource('documents', DocumentController::class);
});
