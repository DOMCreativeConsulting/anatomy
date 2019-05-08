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

        return view("index-$view", compact('servicos'));
        
    }

}
