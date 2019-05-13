<?php

namespace App\Controllers;
use App\Model\Notificacoes;

class NotificacoesController
{

    public function index()
    {
        Notificacoes::buscar();
    }

    public function marcarLida()
    {
        Notificacoes::marcarLida();
    }

}