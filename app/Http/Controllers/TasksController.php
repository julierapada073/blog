<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
     public function store()
    {
    	return 'store';
    }

        public function index()
    {
    	return view('tasks.index');
    }
   
       public function create()
    {
    	return view('tasks.create');
    }
   
       public function update()
    {
    	return view('tasks.update');
    }
   
   
}
