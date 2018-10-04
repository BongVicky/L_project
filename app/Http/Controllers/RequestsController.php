<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Requests;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class RequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email = Auth::user()->email;
        $employee = \App\Employee::where('email','=',$email)->first();
        return \App\Requests::where('emp_id','=',$employee->id)->get();
        return view('new',compact('requests'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leave');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        Requests::create([
//            'emp_id'          => $request->get('emp_id'),
//            'id'            => $request->get('id'),
//            'leave_date'    => $request->get('leave_date'),
//            'return_date'   => $request->get('return_date'),
//            'numberofday'   => $request->get('numberofday'),
//            'leave_type'    => $request->get('leave_type'),
//            'reason'        => $request->get('reason')
//        ]);
        $employee = \App\Employee::find('id');
        $request = new \App\Requests;
        $request->emp_id=$request->get($employee->id);
        $request->id=$request->get('id');
        $request->leave_date=$request->get('leave_date');
        $request->return_date=$request->get('return_date');
        $request->numberofday=$request->get('numberofday');
        $request->leave_type=$request->get('leave_type');
        $request->reason=$request->get('reason');
//        $request->updated_at=$request->get('updated_at');
//        $request->created_at=$request->get('created_at');
        $request->save();

        return redirect('requests')->with('success', 'Request has been added.');
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
        $request = \App\Requests::find($id);
        return view('pages.edit', compact('requests','id'));
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
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $request = \App\Requests::find($id);
        $request->delete();
        return redirect('requests')->with('success','Information has been  deleted.');
    }
}
