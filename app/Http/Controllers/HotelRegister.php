<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelRegister extends Controller
{
    public function registrationForm()
    {
        return view('hotel-registration.registerform');
    }

    public function hotelRegister(Request $request){
        // $this->validate($request, [
        //     'email' => 'required|email',
        //     'password' => 'required',
        //     ]);
        // if (Auth::attempt([
        //     'email' => $request->email,
        //     'password' => $request->password])
        // ){
        //     return redirect('/dashboard');
        // }
        return redirect('/register')->with('error', 'Invalid Email address or Password');
    }
}
