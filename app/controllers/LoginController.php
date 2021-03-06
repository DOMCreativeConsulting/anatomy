<?php

namespace App\Controllers;
use App\Model\User;
use App\Model\Model;
use App\Core\App;

class LoginController
{

    public $funcionarios;

    public function login()
    {
        User::login();
    }

    public function logout()
    {
        User::logout();
    }

    public function cadastrar()
    {
        User::cadastrar();
    }

    public function loginScreen()
    {
        return view('loginScreen');
    }

    public function incorreto()
    {
        return view('invalid-loginScreen');
    }

    public function signUpScreen()
    {
        $this->funcionarios = User::funcionarios();

        return view('signUpScreen', $this->funcionarios);
    }

}