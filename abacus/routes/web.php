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
Route::get('/hello', function () {
    return "<h1>Hello World</h1>";
});
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/list',[\App\Http\Controllers\PagesController::class, 'list']);
Route::post('/store',[\App\Http\Controllers\PagesController::class, 'store']);
Route::get('/create',[\App\Http\Controllers\PagesController::class, 'create']);
