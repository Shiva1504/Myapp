<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;


Route::view('/', 'home');

Route::resource('jobs', JobController::class);

Route::view('/contact', 'contact');
