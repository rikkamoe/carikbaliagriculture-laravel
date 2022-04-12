<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
            $data = Product::where('status_product', '>', '0')->get();
            return view('customer.dashboard', compact('data'));
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

