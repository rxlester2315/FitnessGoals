<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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





}