<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ucontroller;

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

Route::get('/', [ucontroller::class, 'index']);
Route::get('work', [ucontroller::class, 'work']);
Route::get('works-archive', [ucontroller::class, 'archive']);
Route::get('work/{page}', [ucontroller::class, 'work'])->where('page', '[0-9]+');
Route::get('works-archive/{page}', [ucontroller::class, 'archive'])->where('page', '[0-9]+');
Route::get('vituralight/', [ucontroller::class, 'vitural']);
Route::get('about-me', [ucontroller::class, 'aboutme']);
Route::get('contact', [ucontroller::class, 'contact']);
