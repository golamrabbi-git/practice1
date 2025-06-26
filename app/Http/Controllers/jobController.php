<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class jobController extends Controller
{
    //
    public function index(){
        $jobs = Job::latest()->simplePaginate(20);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function show(Job $job){
        return view('jobs.show',compact('job'));

    }
    public function create(){
        return view('jobs.create');
    }
    public function edit(Job $job){
        return view('jobs.edit',compact('job'));
    }
    public function store(){
        request()->validate([
            'title' => ['required','min:3'],
            'salary' => ['required','numeric','min:1000'],
        ]);
        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);
        return redirect('/jobs');
    }
    public function update(Job $job){
        request()->validate([
            'title' => ['required','min:3'],
            'salary' => ['required','numeric','min:1000'],
        ]);

//    $job = Job::findOrFail($id);
//    $job->title = request('title');
//    $job->salary = request('salary');
//    $job->save();
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);
        return redirect('/jobs/' .$job->id);
    }
    public function destroy(Job $job){
//    $job = Job::findOrFail($id);
        $job->delete();
        return redirect('/jobs');
    }
}
