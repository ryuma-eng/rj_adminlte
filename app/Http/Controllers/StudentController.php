<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('students.index');
    }

    public function create(){
        return view('students.create');
    }

    public function employee(){
        return view('students.employee');
    }

  

    public function edit() {
        return view('students.edit');
    }


}
