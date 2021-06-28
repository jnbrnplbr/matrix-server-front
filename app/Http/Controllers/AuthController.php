<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function checkEmail () {
        return view('auth.email');
    }


    public function verifyEmail (EmailRequest $request) {

        $email = explode('@',$request->input('email'));

        if($email[1] != 'up.edu.ph' && $email[1] != 'outlook.up.edu.ph') {
            return back()->with('error', 'Restricted for UP Mail only.');    
        }

        
        return redirect('/signup')->with([
            'success' => 'Email can be use for registration.',
            'email'   => $request->input('email')
        ]);
        
    }



}
