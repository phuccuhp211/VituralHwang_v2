<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\U_Controller;

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

Route::get('/', [U_Controller::class, 'index'])->name('user.home');
Route::get('work', [U_Controller::class, 'work'])->name('user.works');
Route::get('works-archive', [U_Controller::class, 'archive'])->name('user.archives');
Route::get('vituralight', [U_Controller::class, 'vitural'])->name('user.vitural');
Route::get('about-me', [U_Controller::class, 'aboutme'])->name('user.aboutme');
Route::get('contact', [U_Controller::class, 'contact'])->name('user.contact');
