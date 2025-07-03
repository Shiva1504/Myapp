<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job{
    public static function all(){
    return [
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
    ];
    }

    public static function find(int $id): array{

        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
                abort(404, 'Job not found');
            }
        return $job;
    }


}