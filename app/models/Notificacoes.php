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
            if($_POST['tipo']=='ticket'){
                redirect('meus-tickets');
            }else{
                redirect('servicos');
            }
        }
        
        if($_SESSION['funcao'] != 'cliente'){
            if($_POST['tipo']=='ticket'){
                redirect('tickets-pendentes');
            }else{
                redirect('servicos');
            }
        }
        
    }

}