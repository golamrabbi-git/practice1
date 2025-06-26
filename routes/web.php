<?php

use App\Http\Controllers\jobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::view('/', 'home');
Route::view('/contact','contact');

Route::controller(jobController::class)->group(function () {
    //index
    Route::get('/jobs','index');
//Create
    Route::get('/jobs/create','create');
//Show
    Route::get('/jobs/{job:id}', 'show');
//Store
    Route::post('/jobs','store');
//Edit
    Route::get('/jobs/{job}/edit','edit');
//Update
    Route::patch('/jobs/{job}', 'update');
//Delete
    Route::delete('/jobs/{job}', 'destroy');
});





