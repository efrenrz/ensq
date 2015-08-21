<?php

namespace ensq\Http\Controllers;

use Illuminate\Http\Request;

use ensq\Http\Requests;
use ensq\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$user =  auth()->user();
        //$role = config('roles.' . $user->role);



        return view('admin/dashboard');
    }

}
