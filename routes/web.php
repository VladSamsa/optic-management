<?php

use App\Http\Controllers\categoriaController;
use App\Http\Controllers\OrdenController;
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
    return view('template');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::view('/panel', 'panel.index')->name('panel');

Route::resource('categorias',categoriaController::class);

Route::resource('ordens',OrdenController::class);

Route::get('/401', function () {
    return view('pages.401');
});

Route::get('/404', function () {
    return view('pages.404');
});

Route::get('/500', function () {
    return view('pages.500');
});