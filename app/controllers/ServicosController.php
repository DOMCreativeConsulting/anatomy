<?php

namespace App\Controllers;
use App\Model\User;
use App\Model\Servicos;
use App\Model\Model;
use App\Model\Produtos;

class ServicosController
{

    public function index()
    {
        User::check();

        $view = User::view();
        $servicos = Servicos::buscarPorCliente();

        return view("servicos-$view", compact('servicos'));

    }

    public function entregar()
    {
        User::check();

        Produtos::entregar();
    }

    public function cadastrarEntrega()
    {
        User::check();

        $servicos = Servicos::buscar();

        return view("entregar-servico", compact("servicos"));
    }

    public function solicitar()
    {
        User::check();

        return view("solicita-servicos");
    }

    public function cadastrar()
    {
        Servicos::cadastrar();

        return view('solicita-servicos');
    }

}