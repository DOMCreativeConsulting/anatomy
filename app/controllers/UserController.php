<?php

namespace App\Controllers;
use App\Model\User;
use App\Model\Notificacoes;

class UserController
{

    public function index()
    {
        $usuarios = User::buscar();
        $notificacoes = Notificacoes::buscar();

        return view('edita-usuario', compact('usuarios','notificacoes'));
    }

    public function minhaConta()
    {
        return view('minha-conta');
    }

}