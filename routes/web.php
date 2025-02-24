<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use  App\Models\Job;
use Illuminate\Database\Eloquent\Collection;





Route::get('/', function () {

 
    return view('home',
    ['greeting' => 'hello']
);
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function()  {

    $jobs= Job::with('employer');
    return view('jobs',
    [
    'jobs' => Job::all()
    ]
);
});

Route::get('/jobs/{id}', function($id) {
   
    $job = Job::find($id);
        
        
                   
        
    return view('job', ['job' => $job ]);
});

