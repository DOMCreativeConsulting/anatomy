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

        $servico = App::get('database')->selectWhere('servicos',["id"=>$_POST['servico']]);
        $nomeDoCliente = $servico[0]->autor;
        
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
            'destinado' => $nomeDoCliente,
            'tipo' => 'aviso'
        ]);

        $autor = App::get('database')->selectWhere('servicos',[
            'id' => $_POST['servico']
        ]);

        $emailCliente = App::get('database')->selectWhere('usuarios',[
            'nome' => $autor[0]->autor
        ]);

        foreach($emailCliente as $email){
            $email = $email->email;
        }

        Email::enviar('noreply@anatomymkt.com.br',$email,[
            'assunto' => $_SESSION['usuario']." acaba de entregar a sua solicitação.", 
            'mensagem' => $_SESSION['usuario']." acaba de entregar o serviço ".$_POST['nome'].". 
            <br>Você tem 2 dias para aprovar ou reprovar o produto antes que o prazo se expire.<br>"
        ]);
        
        $_SESSION['sucesso'] = true;

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