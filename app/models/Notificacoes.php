<?php

namespace App\Model;
use App\Core\App;

class Notificacoes
{

    public static function buscar()
    {
        return App::get('database')->selectAll('notificacoes');
    }

}