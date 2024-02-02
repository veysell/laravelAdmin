<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
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

Route::get('/',[HomeController::class,'Index'])->name('Index');
Route::get('/about',[PageController::class,'About'])->name('About');
Route::get('/activity',[PageController::class,'Activity'])->name('Activity');
Route::get('/blog',[PageController::class,'Blog'])->name('Blog');
Route::get('/contact',[PageController::class,'Contact'])->name('Contact');
