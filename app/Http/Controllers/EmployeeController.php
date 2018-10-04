<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=\App\Employee::all();
        return view('pages.indexEmp',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.employee');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new \App\Employee;
        $employee->id=$request->get('id');
        $employee->first_name=$request->get('first_name');
        $employee->last_name=$request->get('last_name');
        $employee->email=$request->get('email');
        $employee->position=$request->get('position');
        $employee->gender=$request->get('gender');
        $employee->dob=$request->get('dob');
        $employee->number=$request->get('number');
        $employee->hire_date=$request->get('hire_date');
        $employee->monthly_leave=$request->get('monthly_leave');
//        $employee->status= $request->get('status');
//        $employee->contract_end= $request->get('contract_end');
        $employee->save();
        return redirect('employees')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = \App\Employee::find($id);
        return view('pages.showEmp', compact('employee'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = \App\Employee::find($id);
        return view('edit.employee',compact('employee','id'));

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


         $employee= \App\Employee::find($id);
//         $employee->id= $request->get('id');
         $employee->first_name = $request->get('first_name');
         $employee->last_name = $request->get('last_name');
         $employee->email= $request->get('email');
         $employee->position= $request->get('position');
         $employee->gender= $request->get('gender');
         $employee->dob= $request->get('dob');
         $employee->number=$request->get('number');
         $employee->hire_date= $request->get('hire_date');
         $employee->monthly_leave= $request->get('monthly_leave');
//         $employee->status= $request->get('status');

         $employee->save();

        return redirect('employees')->with('success', 'Information has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = \App\Employee::find($id);
        $employee->delete();
        return redirect('employees')->with('success','Information has been  deleted.');
    }
}
