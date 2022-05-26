<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToppagesController extends Controller
{
    // Toppage表示
    public function index()
    {
        // viewの呼び出し
        return view('welcome');
    }
    
    public function top(){
        // viewの呼び出し
        return view('welcome');
    }
}
