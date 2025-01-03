<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
//    dd(database_path('database.sqlite'));
    $jobs = Job::all();
//    dd($jobs);
    return view('home');
});
Route::get('/jobs', function ()  {
    return view('jobs',['jobs'=>Job::all()]);
});

Route::get('/jobs/{id}', function ($id)  {
    $job = Job::find($id);

//    dd($job);
//    return view('job',["job"=>$job]);
    return view('job',compact('job'));

});

Route::get('/contact', function () {
    return view('contact');
});
