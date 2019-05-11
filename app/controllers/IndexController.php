<?php

namespace App\Controllers;
use App\Model\User;
use App\Model\Servicos;

class IndexController
{
    
    public function index()
    {

        User::check();

        $view = User::view();
        $servicos = Servicos::buscarPorCliente();
        $todosServicos = Servicos::buscar();
        $clientes = User::buscar();

        return view("index-$view", compact('servicos','todosServicos','clientes'));
        
    }

    public function embreve()
    {
        return view("embreve");
    }

}
