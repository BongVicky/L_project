<?php

namespace App\Http\Controllers;

use App\Crons;
use Illuminate\Http\Request;

class CronsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crons =\App\Crons::all();
        return view('index.cron',compact('crons','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.cron');
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

        $crons= new \App\Crons;
        $crons->contract_id=$request->get('contract_id');
        $crons->send=$request->get('send');
        $crons->save();

        return redirect('crons')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Crons  $crons
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Crons  $crons
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crons= \App\Crons::find($id);
        return view('edit.cron', compact('crons','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Crons  $crons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //change
        $crons= \App\Crons::find($id);
        $crons->contract_id=$request->get('contract_id');
        $crons->send=$request->get('send');
        $crons->save();
        return redirect('crons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Crons  $crons
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crons = \App\Crons::find($id);
        $crons->delete();
        return redirect('crons');
    }
}
