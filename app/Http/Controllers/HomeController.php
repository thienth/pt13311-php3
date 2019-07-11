<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

    	$name = 'Nong Huong Ly';
    	$age = 38;

    	return view('client.index', compact('name', 'age'));
    }
}
