<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authlog()
    {
        return view('Auth.Login');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt(array_merge($credentials, ['status' => 'Active']))) {
            $user = Auth::user();
         // Redirect sa may specific route niya once nag login
            $redirectRoutes = [
                'Coach' => 'Coach',
                'Admin' => 'admins',
                'Front' => 'Frontdesk',
                'Member' => 'members',
                'Non member' => 'Non'
            ];

            return redirect()->intended($redirectRoutes[$user->role_name] ?? 'home')
                ->with('login_success', 'Welcome back!');
        }

        return back()->withErrors(['email' => 'Invalid email, password, or inactive status.']);
    }


    public function logout(){

        $user = Auth::User();
       Session::put('user', $user);
       $user=Session::get('user');


        Auth::logout();
        return redirect('/login');


    }

    public function memberview()
    {
        return view('Member.home');
    }


    public function frontdeskview(){

        return view('Frontdesk.home');

    }


    public function coachview(){

        return view('coach.home');
    }
}