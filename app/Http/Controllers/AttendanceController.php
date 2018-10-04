<?php

namespace App\Http\Controllers;

use App\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Employee;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendances=\App\Attendance::all();
        $employees = \App\Employee::all();
        return view('pages.index',compact('attendances','employees'));
    }


    /**
     * Show a form of request leave.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function request()
    {
        $attendances=\App\Attendance::all();
        return view('leave',compact('attendances'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $employees = \App\Employee::all();
        return view('pages.create',compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Attendance::create([
            'empid' => $request->get('empid'),
            'leave_date'=>$request->get('leave_date'),
            'return_date'=>$request->get('return_date'),
            'numday'=>$request->get('numday'),
            'leave_type'=>$request->get('leave_type'),
            'reason'=>$request->get('reason'),

        ]);


        return redirect('attendances')->with('success', 'Request has been added.');

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
        $attendance = \App\Attendance::find($id);
        $emp = DB::table('employees')->where('id',$attendance->emp_id)->get();
        return view('pages.edit', compact('attendance','emp','id'));
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
		$attendance= \App\Attendance::find($id);

		$attendance->leave_date= $request->get('leave_date');
		$attendance->return_date= $request->get('return_date');
		$attendance->numday= $request->get('numday');
		$attendance->leave_type= $request->get('leave_type');
		$attendance->reason= $request->get('reason');
		$attendance->status= $request->get('status');
		$attendance->updated_at= $request->get('updated_at');
		$attendance->created_at= $request->get('created_at');
		$attendance->save();

		return redirect('attendances');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attendance = \App\Attendance::find($id);
        $attendance->delete();
        return redirect('attendances')->with('success','Information has been  deleted.');
    }

}
