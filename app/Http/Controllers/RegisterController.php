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
        return view('register', compact('countries'));
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
            'password' => 'required|confirmed|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'description' => 'nullable',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = new User();
        if (!empty($request->photo)) {
            $user->addMediaFromRequest('photo')
                ->toMediaCollection('photo');
        }
        $user->fullname = $request->fullname;
        $user->username = $request->username;
        $user->date_of_birth = $request->date_of_birth;
        $user->country_id = $request->country_id;
        $user->email = $request->email;
        $user->phone = $request->country_code . $request->phone;
        $user->password = bcrypt($request->password);
        $user->description = $request->description;

        // dd($user);
        $user->save();
        $request->session->flash('success', 'You have successfully registered!');
        return redirect('/');
    }
}
