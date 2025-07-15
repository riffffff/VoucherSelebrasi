<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\FormasiController;

Route::get('/K', [FormasiController::class, 'indexK']);
Route::get('/J', [FormasiController::class, 'indexJ']);
Route::get('/I', [FormasiController::class, 'indexI']);
Route::get('/H', [FormasiController::class, 'indexH']);
Route::get('/G', [FormasiController::class, 'indexG']);
Route::get('/F', [FormasiController::class, 'indexF']);
Route::get('/E', [FormasiController::class, 'indexE']);
Route::get('/D', [FormasiController::class, 'indexD']);
Route::get('/C', [FormasiController::class, 'indexC']);
Route::get('/B', [FormasiController::class, 'indexB']);
Route::get('/A', [FormasiController::class, 'indexA']);
