<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


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
// 一覧画面
Route::get('/', [TodoController::class, 'index'])->name('todos.index');
Auth::routes();
// 登録画面の表示
Route::get('/create', [TodoController::class, 'create'])->name('todos.create');
// 登録処理
Route::post('/store', [TodoController::class, 'store'])->name('todos.store');
// 詳細画面
Route::get('/show/{id}', [TodoController::class, 'show'])->name('todos.show');
// 本の編集画面
Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('todos.edit');
// 本の更新処理
Route::post('/update/{id}', [TodoController::class, 'update'])->name('todos.update');
// 本の削除
Route::post('/destroy{id}', [TodoController::class, 'destroy'])->name('todos.destroy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

