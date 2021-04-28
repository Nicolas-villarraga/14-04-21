<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanieController;

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

Route::redirect('/','users');

Route::get('users',[UserController::class,'index']);
Route::get('users/create',[UserController::class,'create']);
Route::post('users',[UserController::class,'store']);
Route::get('users/{id}',[UserController::class,'show']);
Route::delete('users/{id}',[UserController::class,'destroy']);
Route::get('users/edit/{id}',[UserController::class,'edit']);
Route::put('users/{id}',[UserController::class,'update']);
Route::get('companies',[CompanieController::class,'index']);
