<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // orm - object relational mapper
     public function index(){
        // $jobs = Job::paginate(12);
        // SELECT * FROM trio_db.jobs;

            $jobs = Job::all();
            
            // ddd($jobs);

        // return view('jobs.index',[
        //     'jobs' => $jobs
        // ]);

        
    }

    public function show($id){
        ddd($id);
    }

    public function create(request $request){
        ddd('this is create');
    }

    public function store(request $request){
       
    }

    public function edit($id){
        ddd($id);
    }

    public function update(Job $job, request $request){
        ddd($id);
    }
}
