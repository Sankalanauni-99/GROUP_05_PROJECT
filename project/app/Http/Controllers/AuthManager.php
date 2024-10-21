<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    public function login()
    {
        return view('login');
    }
     function registration()
    {
        return view('registration');
    }

    public function loadAllUsers(){
        $all_users = User::all();
        return view('users',compact('all_users'));
    }
    
    public function loginPost(Request $request)
    {
        
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = User::Where('username',$request->input('username'))->first();
            Auth::login($user);
            
            return redirect('/');
        }

        return redirect(route('login'))->with('error', 'Login details are not valid');
    }

    public function registrationPost(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'mobilenumber' => 'required',
            'emailaddress' => 'required|email|unique:users',
            'username' => 'required',
            'password' => 'required|min:8|confirmed',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'mobilenumber' => $request->mobilenumber,
            'emailaddress' => $request->emailaddress,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ];

        if ($request->hasFile('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        $user = User::create($data);

        if (!$user) {
            return redirect(route('registration'))->with('error', 'Registration failed, please try again.');
        }

        return redirect(route('login'))->with('success', 'Registration successful!');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
