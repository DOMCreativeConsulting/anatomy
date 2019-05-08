<?php

namespace App\Model;
use App\Model\Model;
use App\Core\App;

class Servicos extends Model
{
    
    public static function buscar()
    {
        $busca = App::get('database')->selectAll('servicos');
        return $busca;
    }

}