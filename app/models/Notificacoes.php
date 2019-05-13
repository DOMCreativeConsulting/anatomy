<?php

namespace App\Model;
use App\Core\App;

class Notificacoes
{

    public static function buscar()
    {
        return App::get('database')->selectAll('notificacoes');
    }

    public static function marcarLida()
    {
        App::get('database')->update('notificacoes',[
            'status' => 'lida'
        ],[
            'id' => $_POST['notificacaoId']
        ]);

        if($_SESSION['funcao'] == 'cliente'){
            redirect('meus-tickets');
        }
        
        if($_SESSION['funcao'] != 'cliente'){
            redirect('tickets-pendentes');
        }
        
    }

}