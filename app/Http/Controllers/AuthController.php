<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(){
        return view("login");
    }

    public function auth(Request $request){
        $this->validate($request,["email"=>"required|email","password"=>"required"]);
        if(\Auth::attempt(["email"=>$request->email,"password"=>$request->password],1)){
            return redirect(route("home"));
        }
        else{
            return redirect()->back();
        }

    }

    public function logout(){
        if(\Auth::check()){
            \Auth::logout();
        }
        return redirect(route("login"));
    }



}
