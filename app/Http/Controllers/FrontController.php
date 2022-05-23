<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('home.home');
    }
    public function categoryProducts(){
        return view('category.show');
    }
}
