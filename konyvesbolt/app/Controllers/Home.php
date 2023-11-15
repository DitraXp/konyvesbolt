<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');

    }


    public function welcome_message()
    {
        return view('udv');

    }

    public function regisztracio()
    {
        return view('reg');

    }
}
