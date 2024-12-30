<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\U_Controller;

Route::get('/', [U_Controller::class, 'index'])->name('user.home');
Route::match(['get','post'] ,'work', [U_Controller::class, 'work'])->name('user.works');
Route::match(['get','post'] ,'works-archive', [U_Controller::class, 'archive'])->name('user.archives');
Route::get('vituralight', [U_Controller::class, 'vitural'])->name('user.vitural');
Route::get('about-me', [U_Controller::class, 'aboutme'])->name('user.aboutme');
Route::get('contact', [U_Controller::class, 'contact'])->name('user.contact');
