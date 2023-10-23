<?php
// //testing---------------------
use App\Models\Job;

use App\Http\Controllers\JobController;
use App\Http\Controllers\JobSeekerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//default routes
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/', function(){
    return view('auth.login');
});



//routes for the jobs controller
Route::get('/jobs',[JobController::class, 'index']);
Route::get('/job/{id}',[JobController::class, 'show']);
Route::get('/job',[JobController::class, 'create']);
Route::get('/job/{id}/edit',[JobController::class, 'edit']);

Route::post('/job', [JobController::class, 'store']);
Route::put('/job/{id}/edit', [JobController::class, 'update']);
Route::delete('/job/{id}', [JobController::class, 'destroy']);

//routes for the jobseeker controller
Route::get('/jobseekers',[JobSeekerController::class, 'index']);
Route::get('/jobseeker/{id}',[JobSeekerController::class, 'show']);
Route::get('/jobseeker',[JobSeekerController::class, 'create']);
Route::get('/jobseeker/{id}/edit',[JobSeekerController::class, 'edit']);

Route::post('/jobseeker', [JobSeekerController::class, 'store']);
Route::put('/jobseeker/{id}/edit', [JobSeekerController::class, 'update']);
Route::delete('/jobseeker/{id}', [JobSeekerController::class, 'destroy']);


// // model ,factories, seeder-------------

Route::get('/', function(){
   return Job::all();
});


