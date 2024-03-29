<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;

class MainController extends Controller
{
    //
    function index(){
        return view('login');
    }
    function checklogin(Request $request){
        $this->validate($request,[
            'name'      => 'required|name',
            'pa$ssword'  => 'required|alphaNum|min:3',
        ]);

        $user_data = array(
            'name'      => $request->get('name'),
            'password'  => $request->get('password')
        );

        if(Auth::attempt($user_data)){
            return redirect('main/successlogin');
        }
        else{
            return back()->with('error', 'Wrong Login Details');

        }
        function successlogin(){
            return view('successlogin');
        }
    }
}
