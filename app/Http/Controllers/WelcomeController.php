<?php

namespace App\Http\Controllers;


class WelcomeController extends AppBaseController
{
    public function index()
    {
        return view('welcome');
    }
}


?>