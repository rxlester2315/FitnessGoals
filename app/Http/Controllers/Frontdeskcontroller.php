<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class Frontdeskcontroller extends Controller
{
    

    
    public function coachs(){
        return view('Frontdesk.addcoach');
    }


   
   public function storecoach(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'birthdate' => 'required|date',
        'email' => 'required|email|unique:users,email',
        'phone_number' => 'required|string|max:15',
        'typecoach' => 'required|string',
        'password' => 'required|string|min:8',
        'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
    ]);

    $data = new User;

    if ($request->hasFile('file')) {
        $image = $request->file('file'); // Access the file properly
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('coachimage'), $imagename); // Save the file to the 'coachimage' folder
        $data->image = $imagename;
    }

    $data->name = $request->name;
    $data->birthdate = $request->birthdate;
    $data->email = $request->email;
    $data->phone_number = $request->phone_number;
    $data->typecoach = $request->typecoach;
    $data->password = Hash::make($request->password);
    $data->role_name = 'Coach';
    $data->status = 'Active';
    $data->save();

    return redirect()->back()->with('message', 'Add Coach Successfully');
}

}