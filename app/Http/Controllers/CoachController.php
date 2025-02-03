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



public function schedule(){

    $currentuser = auth()->user()->name;


    $data = Subscription::where('coachprefer',$currentuser)
    ->where('status','Approved')
    ->get();
    return view('coach.schedule_coaching',compact('data'));
}


public function updatetime($id){

    $selectedUser = Subscription::findOrFail($id);


  
    
    return view('coach.update-time',compact('selectedUser'));
}


public function updatetimeBend(Request $request, $id) {
    // Validate the input
    $request->validate([
        'prefertime' => 'required|date_format:H:i',
    ]);

    // Find the subscription by ID
    $data = Subscription::findOrFail($id);

    // Update the preferred time
    $data->prefertime = $request->prefertime;
    $data->save();

    // Redirect with success message
    return redirect()->back()->with('message', 'Time has been updated successfully');
}
}