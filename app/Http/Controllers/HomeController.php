<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Notification;
use Illuminate\Support\Facades\Notifications;
use App\Models\Subscription; // Assuming you have a Subscription model
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
        ]);

        // Store the subscription data in the database
        $subscription = Subscription::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'coachprefer' => $request->coachprefer,
            'sessiontrain' => $request->sessiontrain,
            'paymentmethod' => $request->paymentmethod,
        ]);

        // Send email notification to the user
        Notification::route('mail', $subscription->email)->notify(new PaymentNotification($subscription));

        // Redirect back with a success message
return redirect()->back()->with('message', 'Your subscription has been processed! Please check your email for details.');
    }



public function enrolllistview(){

    return view('Member.enrollrequest');
}
}