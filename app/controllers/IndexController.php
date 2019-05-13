<?php

namespace App\Controllers;
use App\Model\User;
use App\Model\Servicos;
use App\Model\Ticket;

class IndexController
{
    
    public function index()
    {

        User::check();

        $view = User::view();
        $servicos = Servicos::buscarPorCliente();
        $todosServicos = Servicos::buscar();
        $clientes = User::buscar();
        $tickets = Ticket::buscar();

        return view("index-$view", compact('servicos','todosServicos','clientes','tickets'));
        
    }

    public function embreve()
    {
        return view("embreve");
    }

}
