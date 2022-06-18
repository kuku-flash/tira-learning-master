<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TeachersLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:teacher')->except('logout');
    }
    public function loginForm(){
        return view('teacher.teacher_login');
    }
    public function login(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if( Auth::guard('teacher')->attempt(['email'=>$request->email,'password'=>$request->password], $request->remember)){
            return redirect()->intended(route('teacher.dashboard'));
        }
        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
