<?php

namespace App\Model;
use App\Core\App;

class Produtos
{

    public static function entregar()
    {
        App::get('database')->insert('produtos',[
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
            'pedidoId' => $_POST['servico']
        ]);

        App::get('database')->update('servicos',[
            'status' => 'aguardando aprovacao'
        ],[
            'id' => $_POST['servico']
        ]);

        redirect('cadastrar-entrega');
    }

}