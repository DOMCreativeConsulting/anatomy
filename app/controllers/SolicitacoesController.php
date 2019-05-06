<?php

namespace App\Controllers;
use App\Model\User;
use App\Model\Solicitacoes;
use App\Model\Model;

class SolicitacoesController
{

    public function index()
    {
        User::check();

        $servicos = Solicitacoes::buscarServicos();

        if(User::IsAdmin())
        {
            return view('servicos-admin');
        }
        else
        {
            return view('servicos-user');
        }

    }

}