<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('verify');
    }

    public function index()
    {

        if (Auth::user()->hasRole('user')) {
            return view('userdashboard.index');
        } elseif (Auth::user()->hasRole('agent')) {
            
        } elseif (Auth::user()->hasRole('admin')) {
            return view('admin.index');
        }
    }
}
