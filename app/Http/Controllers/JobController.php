<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index(){

        // Fetch all job listings with their associated employers with one SQL query
        $jobs = Job::with('employer')->latest()->simplePaginate(5);

        return view('jobs.index', [
            'jobs' => $jobs
        ]);

    }

    public function create(){

        return view('jobs.create');

    }

    public function show(Job $job){

        return view('jobs.show', ['job' => $job]);

    }

    public function store(){
        // Validate the form data
        request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'company' => ['required', 'min:3', 'max:255'],
            'salary' => ['required', 'numeric', 'min:0'],
        ]);

        // Create a new job listing
        Job::create([
            'title' => request('title'),
            'company' => request('company'),
            'salary' => request('salary') . ' LPA',
            'employer_id' => '1', 
        ]);
    
        return redirect('/jobs');
    }

    public function edit(Job $job){

        return view('jobs.edit', ['job' => $job]);

    }

    public function update(Job $job){

        // Validate the form data
        request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'company' => ['required', 'min:3', 'max:255'],
            'salary' => ['required', 'numeric', 'min:0'],
        ]);
    
        // Update the job listing
        $job->update([
            'title' => request('title'),
            'company' => request('company'),
            'salary' => request('salary') . ' LPA',
        ]);
    
        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job){

        $job->delete(); 

        return redirect('/jobs');
    }
}
