<?php

namespace App\Http\Controllers;

use App\Cron;
use Illuminate\Http\Request;

class CronController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cron = \App\Cron::all();
        return view('index.page1',compact('cron','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $cron= new \App\Cron;
        $cron->contract_id=$request->get('contract_id');
        $cron->send=$request->get('send');
        $cron->save();
        return redirect('cron')->with('success', 'Information has been added');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Cron  $cron
     * @return \Illuminate\Http\Response
     */
    public function show(Cron $cron)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cron  $cron
     * @return \Illuminate\Http\Response
     */
    public function edit(Cron $cron)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cron  $cron
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cron $cron)
    {
        $cron= new \App\Cron;
        $cron->contract_id=$request->get('contract_id');
        $cron->send=$request->get('send');
        $cron->save();
        return redirect('contract');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cron  $cron
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cron $cron)
    {
        $cron = \App\Contract::find($id);
        $cron->delect();
        return redirect('cron');
    }
}
