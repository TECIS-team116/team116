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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/items', [App\Http\Controllers\ItemController::class, 'index'])->name('items');
Route::get('/items/add', [App\Http\Controllers\ItemController::class, 'add']);

Route::get('/items/edit', [App\Http\Controllers\ItemController::class, 'edit']);
Route::post('/item', [App\Http\Controllers\ItemController::class, 'store'])->name('item');
Route::delete('/item/{item}', [App\Http\Controllers\ItemController::class, 'destroy'])->name('/item/{item}');
Route::get('/', function () {
    return view('welcome');});