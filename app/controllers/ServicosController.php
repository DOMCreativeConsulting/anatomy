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
        $produtos = Produtos::buscar();

        return view("servicos-$view", compact('servicos','produtos'));

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

    public function porCliente()
    {
        User::check();
        $clientes = User::clientes();

        return view("seleciona-cliente", compact('clientes'));
    }

    public function filtraCliente()
    {
        User::check();
        $clientes = User::clientes();
        $selecionado = $_POST['cliente'];
        $servicos = Servicos::buscar();

        return view("porCliente-servico", compact('clientes','selecionado','servicos'));
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

    public function cancelar()
    {
        Servicos::cancelar();
    }

    public function aprovar()
    {
        Servicos::aprovar();
    }

    public function reprovar()
    {
        Servicos::reprovar();
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

    public function entregarNovo()
    {
        User::check();

        Produtos::entregarNovo();
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