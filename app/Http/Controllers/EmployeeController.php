<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=Employee::get();
        return view('Employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fname=$request->input('fname');
        $lname=$request->input('lname');
        $dob=$request->input('dob');


        //---------------------Age Validation------------------------------
        $currentDate = date("Y-m-d");

        $age = date_diff(date_create($dob), date_create($currentDate));

        return $age->format("%y");
        // ----------------------------------------------------------------
        $salary=$request->input('salary');
        $employee=new Employee();
        $employee->first_name=$fname;
        $employee->last_name=$lname;
        $employee->dob=$dob;
        $employee->salary=$salary;
        $employee->save();
        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee=Employee::find($id);
        return view('Employee.show',compact('employee'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('Employee.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fname=$request->fname;
        $lname=$request->lname;
        $dob=$request->dob;
        $salary=$request->salary;

        $employee = Employee::find($id);
        $employee->first_name=$fname;
        $employee->last_name=$lname;
        $employee->dob=$dob;
        $employee->salary=$salary;

        $employee->save();

        return redirect()->route('employees.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee=Employee::find($id);
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
