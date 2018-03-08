<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
	
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
    	return view('admin.dashboard');
    }

    public function getStats(){
    	return view('admin.stats');
    }

    public function getUsers(){
    	$users = User::where('role_id',2)->get();
    	return view('admin.users',compact('users'));
    }
}
