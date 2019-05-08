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

        $view = User::view();
        $servicos = Servicos::buscarPorCliente();

        return view("servicos-$view", compact('servicos'));

    }

    public function solicitar()
    {
        return view("solicita-servicos");
    }

    public function cadastrar()
    {
        Servicos::cadastrar();

        return view('solicita-servicos');
    }

}