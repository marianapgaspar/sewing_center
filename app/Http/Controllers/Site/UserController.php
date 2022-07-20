<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('site.login.index');
    }

    public function authenticate(Request $request){
        if (Auth::attempt(['email' =>$request->email, 'password'=>$request->password])){
            dd('Deu certo');
        } else {
            dd('Algo errado');
        }
    }
}
