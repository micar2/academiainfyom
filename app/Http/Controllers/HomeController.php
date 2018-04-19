<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()){
            if (auth()->user()->hasRole('Admin')){
                return view('/home');
            }else{
                return view('/welcome');
            }
        }else{
            return view('/welcome');
        }

    }
}
