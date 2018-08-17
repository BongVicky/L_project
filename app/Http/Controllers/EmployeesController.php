<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=\App\Employees::all();
        return view('index.employee',compact('employees','id'));
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
        if($request->hasfile('filename'))
        {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        $employees= new \App\Employees;
        $employees->first_name=$request->get('first_name');
        $employees->last_name=$request->get('last_name');
        $employees->email=$request->get('email');
        $employees->gender=$request->get('gender');
        $employees->number=$request->get('number');
        $employees->position=$request->get('position');
//        $date=date_create($request->get('date'));
//        $format = date_format($date,"Y-m-d");
        $employees->dob = $request->get('dob');
        $employees->hire_date = $request->get('hire_date');
        $employees->monthly_leave = $request->get('monthly_leave');

        $employees->save();

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employees = \App\Employees::find($id);
        return view('edit.employee', compact('employees','id'));
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
        $employees = \App\Employees::find($id);
        $employees->first_name=$request->get('first_name');
        $employees->last_name=$request->get('last_name');
        $employees->email=$request->get('email');
        $employees->gender=$request->get('gender');
        $employees->number=$request->get('number');
        $date=date_create($request->get('date'));
        $format = date_format($date,"Y-m-d");
        $employees->dob = strtotime($format);
        $employees->hire_date = strtotime($format);
        $employees->monthly_leave = $request->get('monthly_leave');
        $employees->save();
        return redirect('employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employees = \App\Employees::find($id);
        $employees->delete();
        return redirect('employees');
    }
}
