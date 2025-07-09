<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobPosted;
use App\Models\Employer;

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
            // Add location validation if needed
        ]);
    
        $user = Auth::user();
    
        if (!$user->employer) {
            // Option 1: Redirect with error
            return redirect()->back()->withErrors(['You must be registered as an employer to post a job.']);
            // Option 2: Create an employer record for the user (if appropriate for your app)
            // $employer = Employer::create(['user_id' => $user->id, ...]);
        }
    
        $job = Job::create([
            'title' => request('title'),
            'company' => request('company'),
            'salary' => request('salary') . ' LPA',
            'employer_id' => $user->employer->id,
            // 'location' => request('location'), // Add if needed
        ]);
    
        Mail::to($job->employer->user)->queue(new JobPosted($job));
    
        return redirect('/jobs');
    }

    public function edit(Job $job)
    {
        if (Auth::guest()) {
            return redirect('/login');
        }

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
