<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CsrController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('contact', ContactController::class);
Route::resource('activities', ActivitieController::class);
Route::resource('csr', CsrController::class);
Route::resource('service', ServiceController::class);
Route::resource('job', JobController::class);
Route::resource('about', AboutController::class);
Route::get('/team', [AboutController::class, 'team'])->name('team');
Route::get('/md', [AboutController::class, 'md'])->name('md');
Route::get('/history', [AboutController::class, 'history'])->name('history');

Route::resource('cv', CvController::class);
Route::resource('employer', EmployerController::class);

