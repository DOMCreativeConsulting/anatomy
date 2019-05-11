<?php

namespace App\Controllers;
use App\Model\User;
use App\Model\Model;
use App\Core\App;

class NotificacoesController
{

    public static function index()
    {
        Notificacoes::buscar();
    }

}