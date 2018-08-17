<?php

namespace App\Http\Controllers;

use App\Contracts;
use Illuminate\Http\Request;

class ContractsController extends Controller
{
    public function index()
    {
        $contracts=\App\Contracts::all();
        return view('index.contract',compact('contracts','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.contract');
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
        $contracts= new \App\Contracts;
        $contracts->emp_id=$request->get('emp_id');
        $contracts->salary=$request->get('salary');
        $contracts->from_date =$request->get('from_date');
        $contracts->to_date = $request->get('to_date');

        $contracts->save();

        return redirect('contracts')->with('success', 'Information has been added');
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
        $contract = \App\Contracts::find($id);
        return view('edit.contract', compact('contracts','id'));
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
        $contracts = \App\Contracts::find($id);
        $contracts->emp_id = $request->get('emp_id');
        $contracts->salary = $request->get('salary');
        $contracts->from_date = $request->get('from_date');
        $contracts->to_date = $request->get('to_date');
        $contracts->save();
        return redirect('contracts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contracts = \App\Contracts::find($id);
        $contracts->delete();
        return redirect('contracts');
    }
}
