<?php

namespace App\Http\Controllers;

use DB;
use App\Contracts;
use Illuminate\Http\Request;

class ContractsController extends Controller
{
    public function index()
    {
        $crons = DB::table('contracts')
            ->join('employees', 'employees.id','=','contracts.emp_id')
            ->join('crons','crons.contract_id','=','contracts.id')
            ->where('status',null)
            ->get();
        $contracts = DB::table('contracts')
            ->join('employees','employees.id','=','contracts.emp_id')
            ->select('*','contracts.id')
            ->whereIn('contracts.id', function ($query){
                $query->select(DB::raw('MAX(contracts.id)'))->from('contracts')->groupby('contracts.emp_id');
            })
            ->get();

        return view('index.contract',compact('contracts','crons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = \App\Employee::all();
        return view('create.contract',compact('employees'));
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
        $contracts->p_name = $request->get('p_name');
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
    public function renew($id){
        $contracts = \App\Contracts::find($id);
        return view('edit.contract', compact('contracts','id'));
    }
    public function edit($id)
    {
        $contracts = \App\Contracts::find($id);
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
        $contracts->emp_id = $contracts->emp_id;
        $contracts->p_name = $request->get('p_name');
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
