<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class PasswordChangeController extends Controller
{   
    public function index(){
        $id = auth()->user()->id;
        $user = User::findorfail($id);
        

       
        return view('userdashboard.password', ['user'=>$user]);
    }
    public function update(Request $request){
        $id = auth()->user()->id;
        $user = User::findOrFail($id);
        $this->validate($request, [
            'password' => Auth::user()->password
        ]);
        
        if (Hash::check($request->password, $user->password)) { 
           $user->fill([
            'password' => Hash::make($request->new_password)
            ])->save();
           
           $request->session()->flash('success', 'Password changed');
            return redirect()->route('passwordchange')->with('success',"updated successfully");
        
        } else {
            $request->session()->flash('error', 'Password does not match');
            return redirect()->route('passwordchange');
        }
        

    }
}
