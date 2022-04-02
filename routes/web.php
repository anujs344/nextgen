<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taskcontroller;

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

Route::get('/',[taskcontroller::class,'viewindex']);

Route::post('/addtodo',[taskcontroller::class,'postaddtodo'])->name('addtodo');

Route::post('/deletetodo',[taskcontroller::class,'postdeletetodo'])->name('deletetodo');

Route::post('/markasfinish',[taskcontroller::class,'postmarkfinishtodo'])->name('markfinishtodo');


