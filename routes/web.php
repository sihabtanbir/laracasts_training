<?php



use Illuminate\Support\Facades\Route;
use App\Models\Job;






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
    return view('Job.index',
    [
    'jobs' => Job::all()
    ]
);
});

Route::get('/jobs/{id}', function($id) {
   
    $job = Job::find($id);
        
        
                   
        
    return view('Job.show', ['job' => $job ]);
});

Route::get('/job/create', function () {
    return view('Job.create');
});
Route::post('/jobs', function () {
   
    request()->validate([
        'title' => ['required'],
        'salary' => ['required'],
    ]);

    Job->create([
        'employer_id'=> '1',
        'title' => request('title'),
        'salary' => request('salary'),
       
    ]);
    return redirect('/jobs');
});

Route::get('/jobs/{id}/edit', function($id) {
   
    $job = Job::find($id);
        
        
                   
        
    return view('Job.edit', ['job' => $job ]);
});

Route::PATCH('/job/{id}', function($id){

    request()->validate([
        'title' => ['required'],
        'salary' => ['required'],
    ]);

    $job = Job::find($id);

    Job->update([
        
        'title' => request('title'),
        'salary' => request('salary'),
       
    ]);

    return redirect('/jobs/' . $job->id);

});

Route::delete('/job/{id}', function($id){

    $job = Job::findOrFail($id);
    $job-> delete();

    return redirect('/jobs/' . $job->id);

});

