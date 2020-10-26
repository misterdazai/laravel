<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\users;


class SignUpController extends Controller
{
    public function submit(ContactRequest $req){
        
        $users = new users();
        //$hashed = Hash::make($req->input('password'));
        $users->first_name = $req->input('first_name');
        $users->last_name = $req->input('last_name');
        $users->email = $req->input('email');
        $users->password = $req->input('password');
       
       $users->save(); 

       return redirect()->route('sign_in_form')->with('success', 'Вы успешно зарегистрировались!');
    }
}
