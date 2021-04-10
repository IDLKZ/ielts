<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function change(Request  $request){
        $this->validate($request,["user_id"=>"required","email"=>"required|email","name"=>"required|max:255","password"=>"required|min:4"]);
        if ($user = User::find($request->get("user_id"))){
            $user->email = $request->email;
            $user->name = $request->name;
            $user->password = bcrypt($request->password);
            $user->save();
        }
        return redirect()->back();


    }
}
