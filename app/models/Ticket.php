<?php

namespace App\Model;
use App\Core\App;

class Ticket
{
    public static function abrir()
    {
        App::get('database')->insert('tickets',[
            "titulo" => $_POST['titulo'],
            "categoria" => $_POST['categoria'],
            "texto" => $_POST['mensagem'],
            "status" => "em aberto",
            "autor" => $_SESSION['usuario'],
            "data" => date('Y-m-d H:i:s')
        ]);

        App::get('database')->insert('notificacoes',[
            'mensagem' => $_SESSION['usuario']." acaba de abrir um ticket!",
            'status' => 'nao lida',
            'destinado' => $_SESSION['funcionario'],
            'tipo' => 'ticket'
        ]);

        $_SESSION['sucesso'] = true;
        redirect('ticket');
    }

    public static function buscar()
    {
        return App::get('database')->selectAll('tickets');
    }

    public static function resolver()
    {
        App::get('database')->update('tickets',[
            'resposta' => $_POST['resposta'],
            'status' => 'resolvido'
        ],[
            'id' => $_POST['id']
        ]);

        App::get('database')->insert('notificacoes',[
            'mensagem' => $_SESSION['usuario']." acaba de responder seu ticket!",
            'status' => 'nao lida',
            'destinado' => $_POST['cliente'],
            'tipo' => 'ticket'
        ]);

        redirect('tickets-pendentes');
    }
}