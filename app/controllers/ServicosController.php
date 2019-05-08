<?php

namespace App\Controllers;
use App\Model\User;
use App\Model\Servicos;
use App\Model\Model;

class ServicosController
{

    public function index()
    {
        User::check();

        $servicos = Servicos::buscar();

        User::view();

    }

}