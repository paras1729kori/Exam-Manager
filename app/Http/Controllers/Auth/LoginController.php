<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);

        if(!Auth::attempt($request->only('email','password'))){
            return back()->with('status','Invalid Login Details');
        }

        if(auth()->user()->account_type == '0'){
            return redirect()->route('facultyDashboard');
        }
        else {
            return redirect()->route('adminDashboard');
        }
    }
}
