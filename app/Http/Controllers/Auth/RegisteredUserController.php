<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Validation\Rule;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $cities = DB::select('select * from cities');
        return view('auth.register', ['cities' => $cities]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'first_name' => 'required|string|max:255',
            'gender' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'user_type' => 'required',
            'contact_no' => 'required',
            'date_of_birth' => 'required',
            'user_type' => ['required', Rule::in(['3', '2']),],
        ]);
        Auth::login(
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'title' => $request->title,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'gender' => $request->gender,
                'user_type' => $request->user_type,
                'contact_no' => $request->contact_no,
                'date_of_birth' => $request->date_of_birth,
                'address' => $request->street_address,

            ])
        );

        $data = $request->input();
        $addressModel = new UserAddress();
        
        // $addressModel->street_address = $data['street_address'];
        $addressModel->zip_code = $data['zip_code'];
        $addressModel->city = $data['city'];
        $addressModel->province = $data['province'];
        $addressModel->user_id = $user->id;
        $addressModel->country = $data['country'];

        $addressModel->save();


        $user->attachRole($request->user_type);

        event(new Registered($user));

        return redirect('/register')->with('fStatus', "Registered Successfully.");
    }
}
