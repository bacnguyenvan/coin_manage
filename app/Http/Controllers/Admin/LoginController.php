<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
    	if($request->isMethod('post')){
    		$request->session()->flash('email',$request->email);

    		$this->validateLogin($request);

    		$data = [
    			'email' => $request->email,
    			'password' => $request->password
    		];

    		if(Auth::guard('admin')->attempt($data) ){
    			return redirect()->route('coins-list');	
    		}else{
    			return view('admin.pages.login')->with('error','Email or password is incorrect');
    		}

    	}
    	

    	return view('admin.pages.login');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin-login');
    }
    public function validateLogin($request)
    {
    	$request->validate([
    		'email' => 'required', 
    		'password' => 'required'
    	],[
    		'email.required' => 'Please enter your email',
    		'password.required' => 'Please enter your password'
    	]);

    }
}
