<?php

use Illuminate\Support\Facades\Route;
use App\Models\JobListing;
use Illuminate\Contracts\Queue\Job;

Route::get('/', function () {
    return view('home');
});

//Index
Route::get('/jobs', function ()  {
    // Fetch all job listings with their associated employers with one SQL query
    $jobs = JobListing::with('employer')->latest()->simplePaginate(5);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

// Create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Show
Route::get('jobs/{id}', function ($id) {
    
    $job = JobListing::find($id);
    
    return view('jobs.show', ['job' => $job]);
});

// Store
Route::post('/jobs', function () {

    request()->validate([
        'title' => ['required', 'min:3', 'max:255'],
        'company' => ['required', 'min:3', 'max:255'],
        'salary' => ['required', 'numeric', 'min:0'],
    ]);

    JobListing::create([
        'title' => request('title'),
        'company' => request('company'),
        'salary' => request('salary') . ' LPA',
        'employer_id' => '1', 
    ]);

    return redirect('/jobs');
});

// Edit
Route::get('jobs/{id}/edit', function ($id) {
    
    $job = JobListing::find($id);
    
    return view('jobs.edit', ['job' => $job]);
});

// Update
Route::patch('jobs/{id}', function ($id) {
     request()->validate([
        'title' => ['required', 'min:3', 'max:255'],
        'company' => ['required', 'min:3', 'max:255'],
        'salary' => ['required', 'numeric', 'min:0'],
    ]);

    $job = JobListing::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'company' => request('company'),
        'salary' => request('salary') . ' LPA',
    ]);

    return redirect('/jobs/' . $job->id);
});

// Destroy
Route::delete('jobs/{id}', function ($id) {
    
    $job = JobListing::findOrFail($id);
    $job->delete();

    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
