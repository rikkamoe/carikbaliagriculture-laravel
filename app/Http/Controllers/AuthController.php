<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasRole('superadmin'))
        {
            return view('superadmin.dashboard');
        }
        else if(Auth::user()->hasRole('customer'))
        {
            return view('customer.dashboard');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function superadminlogin()
    {
        return view('superadmin/login');
    }
}

