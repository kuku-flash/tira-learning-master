<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminsLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    public function loginForm(){
        return view('admin.admin_login');
    }
    public function login(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if( Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password], $request->remember)){
            return redirect()->intended(route('dashboard'));
        }
        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
