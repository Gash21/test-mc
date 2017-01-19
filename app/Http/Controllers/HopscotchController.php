<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HopscotchController extends Controller
{	
	public function __construct(){
		$this->secret = "bwMo0k9XPW";
	}

    public function index(){
    	return view('hopscotch');
    }

    public function apiCall(){
    	return view('api-call');
    }
}
