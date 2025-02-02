<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription; 

class CoachController extends Controller
{
    
    public function clients(){
        $coachname = auth()->user()->name;
         $clients = Subscription::where('coachprefer', $coachname)
                          ->Where('status' , 'Pending')
                          ->get();

        return view('coach.list-client',compact('clients'));
    }



public function approvesub($id)
{
    $data = Subscription::find($id);
    if ($data) {
        $data->status = 'Approved';
        $data->save();
        return redirect()->back()->with('message', 'Your appointment has been successfully approved');
    }
    return redirect()->back()->with('error', 'Subscription not found.');
}


public function declinesub($id){
    $data = Subscription::find($id);
    if ($data) {
        $data->status = 'Declined';
        $data->save();
        return redirect()->back()->with('message', 'Your appointment has been successfully Declined');
    }
    return redirect()->back()->with('error', 'Subscription not found.');
}

}