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
//ホーム画面の表示
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//一覧画面の表示
Route::get('/items', [App\Http\Controllers\ItemController::class, 'index'])->name('items');
Route::post('/item', [App\Http\Controllers\ItemController::class, 'store'])->name('item');

//登録画面の表示
Route::get('/items/add', [App\Http\Controllers\ItemController::class, 'add']);
Route::post('/items/add', [App\Http\Controllers\ItemController::class, 'store']);

//編集画面の表示
Route::get('/items/edit', [App\Http\Controllers\ItemController::class, 'edit']);
Route::post('/items/update', [App\Http\Controllers\ItemController::class, 'update']);
Route::get('/items/edit/{id}', [App\Http\Controllers\ItemController::class, 'edit']);

//削除
Route::get('/items/delete/{id}', [App\Http\Controllers\ItemController::class, 'delete']);