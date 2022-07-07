<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index()
    {
        $countries = Country::get();
        $country_codes = Country::all()
        ->where('country_code' , '233');
        return view('register', compact('countries', 'country_codes'));
    }


    public function register(Request $request) 
    {
        
        $this->validate(request(), [
            'fullname' => 'required',
            'username' => 'required|alpha_num|unique:users',
            'date_of_birth' => 'required',
            'country_id' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required',
            'description' => 'nullable',
        ]);

        $user = new User();
        $user->fullname = $request->fullname;
        $user->username = $request->username;
        $user->date_of_birth = $request->date_of_birth;
        $user->country_id = $request->country_id;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->description = $request->description;

        // dd($user);
        $user->save();
        $request->session->flash('success', 'You have successfully registered!');
        return redirect('/');
    }
}
