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
        $servicos = Servicos::buscar();

        return view("servicos-$view", compact('servicos'));

    }

    public function pendentes()
    {
        User::check();

        $view = User::view();
        $servicos = Servicos::buscarPorCliente();
        $admin = Servicos::buscar();

        return view("pendentes-$view", compact('servicos','admin'));

    }

    public function aprovados()
    {
        User::check();

        $view = User::view();
        $servicos = Servicos::buscar();

        return view("aprovados-$view", compact('servicos'));
    }

    public function reprovados()
    {
        User::check();
        
        $view = User::view();
        $servicos = Servicos::buscar();

        return view("reprovados-$view", compact('servicos'));
    }

    public function aguardandoAprovacao()
    {
        User::check();

        $view = User::view();
        $servicos = Servicos::buscar();

        return view("aguardando-$view", compact('servicos'));
    }

    public function cancelados()
    {
        User::check();
        
        $view = User::view();
        $servicos = Servicos::buscar();

        return view("cancelados-$view", compact('servicos'));
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