<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        return view('employees/index');
    }

    public function about()
    {
        return view('about');
    }
}
