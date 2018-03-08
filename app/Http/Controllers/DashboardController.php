<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function getRules(){
    	return view('game.rules');
    }

    public function getAbout(){
    	return view('about');
    }
}
