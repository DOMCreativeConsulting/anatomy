<?php

namespace App\Controllers;
use App\Model\User;

class UserController
{

    public function index()
    {
        $usuarios = User::buscar();
        return view('edita-usuario', compact('usuarios'));
    }

}