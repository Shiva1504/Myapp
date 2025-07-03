<?php

use Illuminate\Support\Facades\Route;
use App\Models\JobListing;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function ()  {
    return view('jobs', [
        'jobs' => JobListing::all()
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
