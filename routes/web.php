<?php

use App\Http\Controllers\ReturnController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test',[TestController::class,'index'])->name('index');

Route::match(['POST','GET'],'/create',[TestController::class,'create']);
Route::match(['POST','GET'],'/update/{id}',[TestController::class,'update']);
Route::get('/delete/{id}',[TestController::class,'delete']);

//TTS 7
Route::get('/index',[ReturnController::class,'index']);
Route::match(['post','get'],'/student/create',[ReturnController::class,'create']);
Route::match(['post','get'],'/student/update/{id}',[ReturnController::class,'update']);
Route::get('/student/delete/{id}',[ReturnController::class,'delete']);


