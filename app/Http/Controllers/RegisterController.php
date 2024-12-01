<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;


class RegisterController extends Controller
{
    

        public function authregister(){

        return view('Auth.register');



    }


   public function registerStore(Request $request)
{
    // Validate request
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'password_confirmation' => 'required',
    ]);

    // Create the user
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'role_name' => 'Non member',
        'status' => 'Active',
        'password' => Hash::make($request->password),
    ]);

    // Redirect with success message
    return redirect()->back()->with('message', 'Account registered successfully.');
}




}