<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserTableController extends Controller {
    public function index(){

        // print("Redirected");
        // $users = DB::select('select * from user');
        return view('users.myprofile');
    }
}