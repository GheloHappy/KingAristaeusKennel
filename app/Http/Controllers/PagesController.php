<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }
    public function header(){
        return view('header');
    }
    public function location(){
        return view('location');
    }
}