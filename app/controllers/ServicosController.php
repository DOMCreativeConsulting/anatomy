<?php

namespace App\Controllers;
use App\Model\User;
use App\Model\Servicos;
use App\Model\Produtos;

class ServicosController
{

    public function index()
    {
        User::check();

        $view = User::view();
        $servicos = Servicos::buscar();
        $produtos = Produtos::buscar();

        if($view == 'cliente'){
            return view("servicos-cliente", compact('servicos','produtos'));
        }
        else{
            return view("servicos-admin", compact('servicos','produtos'));
        }
        
    }

    public function pendentes()
    {
        User::check();

        $view = User::view();
        $servicos = Servicos::buscarPorCliente();
        $admin = Servicos::buscar();

        if($view == 'cliente'){
            return view("pendentes-cliente", compact('servicos','admin'));
        }
        else{
            return view("pendentes-admin", compact('servicos','admin'));
        }
    }

    public function aprovados()
    {
        User::check();

        $view = User::view();
        $servicos = Servicos::buscar();

        if($view == 'cliente'){
            return view("aprovados-cliente", compact('servicos'));
        }
        else{
            return view("aprovados-admin", compact('servicos'));
        }
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

        if($view == 'cliente'){
            return view("reprovados-cliente", compact('servicos'));
        }
        else{
            return view("reprovados-admin", compact('servicos'));
        }
    }

    public function aguardandoAprovacao()
    {
        User::check();

        $view = User::view();
        $servicos = Servicos::buscar();

        if($view == 'cliente'){
            return view("aguardando-cliente", compact('servicos'));
        }
        else{
            return view("aguardando-admin", compact('servicos'));
        }
    }

    public function cancelados()
    {
        User::check();
        
        $view = User::view();
        $servicos = Servicos::buscar();

        if($view == 'cliente'){
            return view("cancelados-cliente", compact('servicos'));
        }
        else{
            return view("cancelados-admin", compact('servicos'));
        }
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

        view('solicita-servicos');
        ?><script>alert("Sucesso!");</script><?php
    }

    public function cadastrarPautaTela()
    {
        User::check();
        $clientes = User::clientes();

        return view('cadastrar-pauta',compact('clientes'));
    }

    public function cadastrarPauta()
    {
        Servicos::cadastrarPauta();
    }

    public function minhasPautas()
    {
        $servicos = Servicos::buscar();

        return view('minhas-pautas', compact('servicos'));
    }

    public function simularCliente()
    {
        User::check();

        $clientes = User::clientes();

        return view('simular-cliente',compact('clientes'));
    }

    public function simular()
    {
        Servicos::simular();
    }

}