<?php

namespace App\Http\Controllers;

use Auth;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $employee = \App\Employee::where('id','=',$id)->first();
        $requests = \App\Requests::where('emp_id','=',$employee->id)->get();
        return view('new',compact('requests'));
    }
    public function create()
    {
        $id = Auth::user()->id;
        $employee = \App\Employee::where('id','=',$id)->first();
        return view('leave',compact('employee'));
    }
    public function store(Request $request)
    {
        $employee = \App\Employee::find('id');
        $request = new \App\Requests;
        $request->emp_id=$request->get($employee->id);
        $request->id=$request->get('id');
        $request->leave_date=$request->get('leave_date');
        $request->return_date=$request->get('return_date');
        $request->numberofday=$request->get('numberofday');
        $request->leave_type=$request->get('leave_type');
        $request->reason=$request->get('reason');
        $request->save();

        return redirect('profile')->with('success', 'Request has been added.');
    }
    public function update_avatar(Request $request){
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->save(public_path('/image/'. $filename));
            $user = Auth::user()->employee;
            $user->avatar = $filename;
            $user->save();
        }
        $id = Auth::user()->id;
        $employee = \App\Employee::where('id','=',$id)->first();
        $requests = \App\Requests::where('emp_id','=',$employee->id)->get();
        return view('new',compact('requests'));
    }
}
