<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = employee::get();
        return view('employee.index',compact('employees'));
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        hahahahah

        employee::create($request->all());
        return view('employee.create');
    }

    public function edit(int $id)
    {
        $employee = employee::findOrFail($id);
        return view('employee.edit',compact('employee'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'fname' => 'required|max:255|string',
            'Midname' => 'required|max:255|string',
            'lname' => 'required|max:255|string',
            'age' => 'required|integer',
            'add' => 'required|max:255|string',
            'zip' => 'required|integer',

        ]);
        
        employee::create($request->all());
        return view('employee.create');
    }
    public function delete(int $id){
        employee::findOrfail($id) ->delete();
        return redirect() ->route('employee.index');
    }
}
