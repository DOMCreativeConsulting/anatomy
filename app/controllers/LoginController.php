<?php

namespace App\Controllers;
use App\Model\User;
use App\Model\Model;
use App\Core\App;

class LoginController
{

    public function login()
    {
        User::login();
    }

    public function loginScreen()
    {
        return view('loginScreen');
    }

    public function cadastrar()
    {
        return view('signUpScreen');
    }

}