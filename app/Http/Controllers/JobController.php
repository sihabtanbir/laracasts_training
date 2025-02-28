<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index(){
        if(Auth::guest()){
            return redirect('/');
        }
        $jobs = Job::with('employer')->latest()->paginate(4);
        return view('Job.index', ['jobs' => $jobs]);
    }

    public function create(){
        return view('Job.create');
    }

    public function show(Job $job){

       
        return view('Job.show', ['job' => $job ]);

    }

    public function store(Request $request){
        $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
           
        ]);
    
        $job = new Job();
        $job->title = $request->title;
        $job->salary = $request->salary;
        
        $job->updated_at = now();
        
        $job->save();


        return redirect('/jobs');
    }

    public function edit(Job $job){
        return view('Job.edit', ['job' => $job ]);
    }

    public function update($job, Request $request){
        $request->validate([
        'title' => ['required'],
        'salary' => ['required'],
    ]);

    $job = Job::findOrFail($job);

   
        $job->title = $request->title;
        $job->salary = $request->salary;
        
        $job->updated_at = now();
        
        $job->save();

    return redirect('/jobs/');
    }

    public function destroy($job){
        
    $job = Job::findOrFail($job);
    $job-> delete();

    return redirect('/jobs/');
    }
   
}
