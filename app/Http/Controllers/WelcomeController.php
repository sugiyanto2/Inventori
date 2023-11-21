<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        return view('/welcome', [
            "title" => "Welcome",
            "image" => "user.png",
        ]);
    }
}
