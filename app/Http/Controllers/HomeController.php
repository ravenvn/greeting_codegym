<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        \Session::put('ten', 'abc');
        \Session::put('ten2', 'ced');
        \Session::flush();
        // \Session::flash('ten', 'Ton ngo khong');
        // session(['card' => '23848484484']);

        return view('index');
    }
}