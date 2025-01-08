<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserAddress;

class PersonalInfoController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;
        $user = User::findorfail($id);
        

       
        return view('userdashboard.index', ['user'=>$user]);
    }

    public function update(Request $request){
        $id = auth()->user()->id;
        $user = User::findOrFail($id);
        
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $contact_no = $request->input('contact_no');
        $email = $request->input('email');
        $address = $request->input('address');
       
        $user->update(['first_name'=>$first_name,'last_name'=>$last_name,'contact_no'=>$contact_no,'email'=>$email,'address'=>$address]);
        return redirect()->route('personalinfo')->with('success',"updated successfully");
    }
    
}
