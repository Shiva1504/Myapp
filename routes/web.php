<?php

use Illuminate\Support\Facades\Route;
use App\Models\JobListing;
use Illuminate\Contracts\Queue\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function ()  {
    
    // Fetch all job listings with their associated employers with one SQL query 
    $jobs = JobListing::with('employer')->get(); 
    return view('jobs', [
        'jobs' => $jobs
    ]);
});

// Route::get('jobs/{id}', function ($id) use ($jobs) {
//     if (!isset($jobs[$id])) {
//         abort(404);
//     }

//     return view('job', ['job' => $jobs[$id]]);
// });

Route::get('jobs/{id}', function ($id) {

    $job = JobListing::find($id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
