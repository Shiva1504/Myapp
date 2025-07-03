<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function ()  {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

// Route::get('jobs/{id}', function ($id) use ($jobs) {
//     if (!isset($jobs[$id])) {
//         abort(404);
//     }

//     return view('job', ['job' => $jobs[$id]]);
// });

Route::get('jobs/{id}', function ($id) {

    $job = Job::find($id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
