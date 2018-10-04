<?php

namespace App\Http\Controllers;

use DB;
use App\performances;
use Illuminate\Http\Request;

class PerformancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $performances = DB::table('performances')
            ->join('employees','employees.id','=','performances.emp_id')
            ->select('*','performances.id')
            ->whereIn('performances.id', function ($query){
                $query->select(DB::raw('MAX(performances.id)'))->from('performances')->groupby('performances.emp_id');
            })->get();
        return view('index.performance',compact( 'performances'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = \App\Employee::all();
        return view('create.performance',compact('employees'));
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
        $performances= new \App\Performances;
        $performances->emp_id=$request->get('emp_id');
        $performances->job_knowledge=$request->get('job_knowledge');
        $performances->work_quality=$request->get('work_quality');
        $performances->attendance=$request->get('attendance');
        $performances->com_listen=$request->get('com_listen');
        $performances->dependability=$request->get('dependability');
        $performances->title=$request->get('title');
        $performances->description=$request->get('description');
        $performances->remark=$request->get('remark');
        $performances->save();
        return redirect('performances')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\performances  $performances
     * @return \Illuminate\Http\Response
     */
    public function show(performances $performances)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\performances  $performances
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $performances = \App\Performances::find($id);
        return view('edit.performance', compact('performances','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\performances  $performances
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $performances = \App\Performances::find($id);
        $performances->emp_id = $performances->emp_id;
        $performances->job_knowledge=$request->get('job_knowledge');
        $performances->work_quality=$request->get('work_quality');
        $performances->attendance=$request->get('attendance');
        $performances->com_listen=$request->get('com_listen');
        $performances->dependability=$request->get('dependability');
        $performances->title=$request->get('title');
        $performances->description=$request->get('description');
        $performances->remark=$request->get('remark');
        $performances->save();
        return redirect('performances')->with('success', 'Information has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\performances  $performances
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $performances = \App\Performances::find($id);
        $performances->delete();
        return redirect('performances');
    }
}
