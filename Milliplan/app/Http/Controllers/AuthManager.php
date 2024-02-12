<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login() {
        return view('login');
    }

    function registration() {
        return view('registration');
    }
    function dashboard() {
        return view('dashboard');
    }
    function loginPost(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }
        else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }
    function registrationPost(Request $request) {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8', 
            'confirmPassword' => 'required|same:password', 
        ], [
            'confirmPassword.same' => 'The password and confirm password must match.',
        ]);
        $data['name'] = $request->fullname;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);

        // $user = new User;
        // $user->fullname = $request->fullname;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->save();
        if(!$user){
            return redirect()->route('regiatration')->with('error', "Registration Failed Try again!!");

        }
        return redirect()->route('login')->with("success", "Registration Succeesful, login to access the dashboard");
    }
    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
