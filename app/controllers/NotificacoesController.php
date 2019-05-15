<?php

namespace App\Controllers;
use App\Model\Notificacoes;

class NotificacoesController
{

    public function index()
    {
        Notificacoes::buscar();
    }

    public function todas()
    {
        $notificacoes = Notificacoes::buscar();

        return view('notificacoes',compact('notificacoes'));
    }

    public function marcarLida()
    {
        Notificacoes::marcarLida();
    }

}