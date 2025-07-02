<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs',[
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'company' => 'Tech Corp',
                'salary' => '10 LPA'
            ],
            [
                'id' => 2,
                'title' => 'Data Analyst',
                'company' => 'Data Solutions',
                'salary' => '8 LPA'
            ],
            [
                'id' => 3,
                'title' => 'Web Developer',
                'company' => 'WebWorks',
                'salary' => '5 LPA'
            ],
            [
                'id' => 4,
                'title' => 'Project Manager',
                'company' => 'Management Inc.',
                'salary' => '12 LPA'
            ]
        ]
    ]);
});

Route::get('jobs/{id}', function ($id) {
    $jobs = [
        1 => [
            'title' => 'Software Engineer',
            'company' => 'Tech Corp',
            'salary' => '10 LPA'
        ],
        2 => [
            'title' => 'Data Analyst',
            'company' => 'Data Solutions',
            'salary' => '8 LPA'
        ],
        3 => [
            'title' => 'Web Developer',
            'company' => 'WebWorks',
            'salary' => '5 LPA'
        ],
        4 => [
            'title' => 'Project Manager',
            'company' => 'Management Inc.',
            'salary' => '12 LPA'
        ]
    ];

    
    if (!isset($jobs[$id])) {
        abort(404);
    }
    
    return view('job', ['job' => $jobs[$id]]);
});

Route::get('/contact', function () {
    return view('contact');
});
