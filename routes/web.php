<?php

use App\Http\Controllers\NavRoute;
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

Route::get('/', [NavRoute::class,'home'])->name('home');
Route::get('/blog', [NavRoute::class,'blog'])->name('blog');
Route::get('/portfolio', [NavRoute::class,'portfolio'])->name('portfolio');
Route::get('/contact', [NavRoute::class,'contact'])->name('contact');
Route::get('/admin', [NavRoute::class,'admin']);


