<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeesController extends Controller
{
    
    public function index()
    {
        $employees=Employee::paginate(10);
        //return $employees;
        return view('employees.index',compact('employees'));
    }

    
    public function create()
    {
        return view('employees.create');
    }

    
    public function store(Request $request)
    {
         Employee::create($request->all());
         return redirect()->action('EmployeesController@index');
    }

   
    public function show($id)
    {
        $employee=Employee::findOrFail($id);
        return view('employees.show',compact('employee'));
    }

   
    public function edit($id)
    {
        $employee=Employee::findOrFail($id);
        return view('employees.edit',compact('employee'));
         
        
    }

    
    public function update(Request $request, $id)
    {
        $employee=Employee::findOrFail($id);
        $employee->update($request->all());

        return redirect()->action('EmployeesController@index');
    }

    
    public function destroy($id)
    {
        //
    }
}
