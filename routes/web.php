<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\userController;
use App\Http\Controllers\sessionController;







Route::get('/', function () {

 
    return view('home',
    ['greeting' => 'hello']
);
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create'])->name('job.create');
Route::get('/job/{job}', [JobController::class, 'show']);
Route::post('/jobs', [JobController::class, 'store'])->name('job.store');
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
Route::post('/jobs/{job}', [JobController::class, 'update'])->name('job.update');
Route::get('/jobs/{job}/delete', [JobController::class, 'destroy'])->name('job.delete');


//auth
Route::get('/register', [userController::class, 'create']);
Route::post('/register', [userController::class, 'store']);
Route::get('/profile', [userController::class, 'edit']);
Route::post('/profile', [userController::class, 'update']);

Route::get('/login', [sessionController::class, 'create']);
Route::post('/login', [sessionController::class, 'store']);
Route::post('/logout', [sessionController::class, 'destroy'])->name('logout');

