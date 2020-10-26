<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignInForm;
use App\Models\users;

class SignInController extends Controller
{
    public function submit(SignInForm $req){
        //$hashed = Hash::make($req->input('password'));
        $email = users::where('email', $req->input('email'))->first();
        $password = users::where('password', $req->input('password'))->first();

        if($email && $password) {
            return redirect()->route('main')->with('success', 'Вы вошли!');
        }else{
            return redirect()->route('sign_in_form')->with('SignInError', 'Неверный email или пароль!');
        }

    }
}
