<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Admin;


class AdminController extends Controller
{
    public function login(){
        return view('backend.loginadmin');
    }
    function submit_login(Request $request){
    	$request->validate([
    		'username'=>'required',
    		'password'=>'required'
    	]);

    	$userCheck=Admin::where(['email'=>$request->username,'password'=>$request->password])->count();
    	if($userCheck>0){
            $adminData=Admin::where(['email'=>$request->username,'password'=>$request->password])->first();
            session(['adminData'=>$adminData]);
    		return redirect('/acceuiladmin2');
    	}else{
    		return redirect('/loginadmin')->with('error','Invalid username/password!!');
    	}

    }
    // Dashboard
    function dashboard(){
    	return 'acceuiladmin2';
    }
 

    // Logout
    function logoutadmin(){
        session()->forget(['adminData']);
        return redirect('loginadmin');
    }
   

}
