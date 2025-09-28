<?php

use Illuminate\Support\Facades\Route;

Route::get('', fn() => to_route('jobs.index'));
Route::resource('jobs', \App\Http\Controllers\JobController::class)->only(['index', 'show']);

Route::get('login', fn() => to_route('auth.create'))->name('login');
Route::resource('auth', \App\Http\Controllers\AuthController::class)->only(['create', 'store']);

Route::delete( 'logout', fn() => to_route('auth.destroy'))->name('logout');
Route::delete('auth', [\App\Http\Controllers\AuthController::class, 'destroy'])->name('auth.destroy');

Route::middleware('auth')->group(function (){
    Route::resource('job.application', \App\Http\Controllers\JobApplicationController::class)
        ->only(['create', 'store', 'destroy']);

    Route::resource('my-job-applications', \App\Http\Controllers\MyJobApplicationController::class)
        ->only(['index', 'destroy']);
});
