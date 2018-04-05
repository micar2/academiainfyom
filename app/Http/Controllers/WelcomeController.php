<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WelcomeController extends AppBaseController
{
    public function index()
    {
        return view('welcome');
    }

    public function register()
    {
        return view('student.users.create');
    }

    public function create(Request $request)
    {
        return view('welcome');
    }

    public function login()
    {
        return view('student.users.login');
    }

    public function intro(Request $request)
    {
        if (Auth::check($request)) {
            return view('welcome');
        }else{
            return view('student.users.login');
        }


    }

    public function store()
    {
        return view('student.users.login');
    }
}


?>