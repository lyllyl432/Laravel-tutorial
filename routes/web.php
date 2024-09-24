<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Illuminate\Queue\Events\JobTimedOut;

Route::view('/', 'home');
Route::view('/contact', 'contact');

// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs',  'index');
//     Route::get('/jobs/create',  'createJobForm');
//     Route::get('/jobs/{job}',  'showSpecificJob');
//     Route::post('/jobs',  'createJob');
//     Route::get('/jobs/{job}/edit',  'updateJobForm');
//     Route::patch('/jobs/{job}',  'updateJob');
//     Route::delete('/jobs/{job}',  'deleteJob');
// });
Route::resource('jobs', JobController::class);

//AUTH
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
