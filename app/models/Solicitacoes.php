<?php

namespace App\Model;
use App\Model\Model;
use App\Core\App;

class Solicitacoes extends Model
{
    
    public static function buscarServicos()
    {
        $busca = App::get('database')->selectAll('usuarios');
        return $busca;
    }

}