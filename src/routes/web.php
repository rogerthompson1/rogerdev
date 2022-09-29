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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[\App\Http\Controllers\UserDataController::class,'index']);
Route::post('user-data/store',[\App\Http\Controllers\UserDataController::class,'store'])->name('add.new.user');
Route::post('user-data/update/{id}',[\App\Http\Controllers\UserDataController::class,'update'])->name('update.new.user');
Route::get('user-data/delete/{id}',[\App\Http\Controllers\UserDataController::class,'delete'])->name('user.delete');
Route::get('user-data/edit/{id}',[\App\Http\Controllers\UserDataController::class,'edit'])->name('user.edit');
