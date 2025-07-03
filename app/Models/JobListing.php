<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class JobListing extends Model{
    protected $table = 'job_listing';

    protected $fillable = [
        'title',
        'company',
        'salary',
    ];
}
