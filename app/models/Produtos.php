<?php

namespace App\Model;
use App\Core\App;

class Produtos
{

    public static function buscar()
    {
        return App::get('database')->selectAll('produtos');
    }

    public static function entregar()
    {
        $nome = $_POST['nome'];
        
        mkdir("private/$nome", 0777, true);

        if(isset($_FILES)){
            uploadFiles("private/$nome/","arquivos");
        }

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

        App::get('database')->insert('notificacoes',[
            'mensagem' => $_SESSION['usuario']." acaba de responder a sua solicitação. <br>Você tem 2 dias para aprovar ou reprovar o produto.",
            'status' => 'nao lida',
            'destinado' => $nome,
            'tipo' => 'aviso'
        ]);

        redirect('cadastrar-entrega');
    }

    public static function entregarNovo()
    {
        $nome = $_POST['nome'];
        
        mkdir("private/$nome", 0777, true);

        if(isset($_FILES)){
            uploadFiles("private/$nome/","arquivos");
        }

        App::get('database')->atualiza('produtos',[
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao']
        ],[
            'pedidoId' => $_POST['servico']
        ]);

        App::get('database')->update('servicos',[
            'status' => 'aguardando aprovacao'
        ],[
            'id' => $_POST['servico']
        ]);

        App::get('database')->insert('notificacoes',[
            'mensagem' => $_SESSION['usuario']." enviou um novo produto. <br>Você tem 2 dias para aprovar ou reprovar o produto.",
            'status' => 'nao lida',
            'destinado' => $nome,
            'tipo' => 'aviso'
        ]);

        redirect('servicos');
    }

}