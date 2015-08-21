<?php

namespace ensq\Http\Controllers;

use Illuminate\Http\Request;

use ensq\Http\Requests;
use ensq\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
