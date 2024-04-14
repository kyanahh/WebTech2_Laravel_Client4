<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function landingpage()
    {
        return view('user.landingpage');
    }

    public function loginpage()
    {
        return view('user.loginpage');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->route('home');
        } else {
            return back()->withErrors([
                'email' => 'Invalid credentials',
            ]);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('log');
    }


    public function createaccount()
    {
        return view('user.createaccount');
    }

    public function createuser(Request $request)
    {
        // Validate data
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|min:6',
            'age' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|max:11',
            'terms' => 'required',
        ]);

        if ($request->password != $request->password_confirmation) {
            return back()->withErrors([
                'password' => 'Password did not match',
                'password_confirmation' => 'Password did not match',
            ]);
        } else {
            // Create a new user
        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->age = $request->age;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        // Log in the newly created user
        auth()->login($user);
        }

        

        return redirect()->route('home')->withSuccess('Account created successfully');
    }

    public function homepage()
    {
        return view('user.homepage');
    }
}
