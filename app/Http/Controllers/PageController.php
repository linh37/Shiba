<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        return view('page.Homepage');
    }

    public function getSignUp(){
        return view('page.signup');
    }

    public function getSignIn(){
        return view('page.signin');
    }
    /*public function postSignUp(Request $req){
        $this->validate(
            [
                'email'=>'required|email|'
            ]
        )
    }*/
}
