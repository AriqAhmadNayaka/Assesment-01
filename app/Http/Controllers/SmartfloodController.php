<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmartfloodController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function tentang()
    {
        return view('tentang');
    }
}
