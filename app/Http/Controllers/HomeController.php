<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;
use Notification;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Notifications;
use App\Models\Subscription; 
use App\Notifications\PaymentNotification;
class HomeController extends Controller
{




public function landings(){

    return view('home.index');
}



public function cardio(){

    return view('Member.classes.cardio');
}


public function yogaa(){
        return view('Member.classes.yogaas');

}


public function pilate(){
        return view('Member.classes.pilatee');

}

public function strength(){
        return view('Member.classes.strengg');

}



public function zumbas(){
        return view('Member.classes.zumbaa');

}


public function coaches(){
    return view('home.coach');
}


public function profile(){

    return view('home.profile');


}




public function enrollstrengthview(){

    return view('member.enrollstrength');
    
}


public function enrollstore(Request $request){

     // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|string|max:11',
            'coachprefer' => 'required|string',
            'sessiontrain' => 'required|string',
            'paymentmethod' => 'required|string',
            'paymentmethod'=> 'required|string'
        ]);



        $subscription = new Subscription;
        $subscription->name = $request->name;
        $subscription->email = $request->email;
        $subscription->phone_number = $request->phone_number;
        $subscription->coachprefer = $request->coachprefer;
        $subscription->sessiontrain = $request->sessiontrain;
        $subscription->paymentmethod = $request->paymentmethod;
        $subscription->typeoftraining = $request->typeoftraining;
        $subscription->prefertime = $request->prefertime;
        $subscription->status = 'Pending';

     if (Auth::id()) {
    $subscription->userid = Auth::user()->id;
} else {
    dd('User is not authenticated');
}

       
       $subscription->save();


  

        // Send email notification to the user
        Notification::route('mail', $subscription->email)->notify(new PaymentNotification($subscription));

        // Redirect back with a success message
return redirect()->back()->with('message', 'Your subscription has been processed! Please check your email for details.');
    }



public function enrolllistview(){
        $userId = Auth::id();


  $data = Subscription::where('userid',$userId)->where('status','Pending')->get();


    return view('Member.enrollrequest',compact('data'));
}











public function enrollpilate(){

    return view('Member.enrollpilate');
}



public function enrollzumba (){

    return view('Member.enrollzumba');
}

public function enrollcardio(){
    return view('Member.enrollcardio');
}





}