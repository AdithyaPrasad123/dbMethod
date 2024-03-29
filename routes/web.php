<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/register',[HomeController::class,'register'])->name('register');
Route::post('/do_register',[HomeController::class,'do_register'])->name('do_register');
Route::get('/view',[HomeController::class,'view'])->name('view');
Route::get('/edit/{id}',[HomeController::class,'edit'])->name('edit');
Route::post('/update/{id}',[HomeController::class,'update'])->name('update');
Route::get('/delete/{id}',[HomeController::class,'delete'])->name('delete');
