<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function cms(){
        if (Auth::check() === true){
            return redirect()->route('site.category.list');
        }
        return view('site.login.index');
    }
    public function login(){
        Auth::logout();
        return view('site.login.index');
    }

    public function authenticate(Request $request){
        if (Auth::attempt(['name' =>$request->name, 'password'=>$request->password])){
            return redirect()->route('site.category.list');
        } else {
            return redirect()->back()->withInput()->withErrors(['Dados inválidos']);
        }
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('site.home');
    }
}
