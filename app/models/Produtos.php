<?php

namespace App\Model;
use App\Core\App;

class Produtos
{

    public static function entregar()
    {
        die(var_dump($_POST));
        App::get('database')->insert('produtos',[
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
            'pedidoId' => $_POST['servico']
        ]);

        App::get('database')->update('servicos',[
            'status' => 'finalizdo'
        ],[
            'id' => $_POST['servico']
        ]);

        redirect('cadastrar-entrega');
    }

}