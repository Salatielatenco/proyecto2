<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArcaicaController;
use App\Http\Controllers\CivilController;
use App\Http\Controllers\PopularlController;
use App\Http\Controllers\ReligiosarlController;
use App\Http\Controllers\HomeController;

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


Route::get('/', HomeController::class);
Route::get('/arcaica',[ArcaicaController::class,'arcaica']);
Route::get('/civil',  [CivilController::class,'civil']);
Route::get('/popular',[PopularlController::class,'popular']);
Route::get('/religiosa',[ReligiosarlController::class,'religiosa']);
