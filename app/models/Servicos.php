<?php

namespace App\Model;
use App\Core\App;
use App\Model\Email;

class Servicos
{
    
    public static function buscar()
    {
        return App::get('database')->selectAll('servicos');
    }

    public static function pendentes()
    {
        return App::get('database')->selectWhere('servicos', ["status" => "pendente"]);
    }

    public static function aguardandoAprovacao()
    {
        return App::get('database')->selectWhere('servicos', ["status" => "aguardando aprovacao"]);
    }

    public static function aprovados()
    {
        return App::get('database')->selectWhere('servicos', ["status" => "aprovado"]);
    }

    public static function reprovados()
    {
        return App::get('database')->selectWhere('servicos', ["status" => "reprovado"]);
    }

    public static function buscarPorCliente()
    {
        return App::get('database')->selectWhere('servicos', ["clienteId" => $_SESSION['id']]);
    }

    public static function cancelar()
    {
        App::get('database')->update('servicos',[
            'status' => 'cancelado'
        ],[
            'id' => $_POST['servico']
        ]);

        redirect('servicos');
    }

    public static function aprovar()
    {
        App::get('database')->update('servicos',[
            'status' => 'aprovado'
        ],[
            'id' => $_POST['servico']
        ]);

        $emailFuncionario = App::get('database')->selectWhere('usuarios',[
            'nome' => $_SESSION['funcionario']
        ]);

        foreach($emailFuncionario as $email){
            $email = $email->email;
        }

        Email::enviar('noreply@anatomymkt.com.br',$email,[
            'assunto' => $_SESSION['usuario']." acaba de Aprovar o serviço.", 
            'mensagem' => $_SESSION['usuario']." acaba de Aprovar o serviço."
        ]);

        redirect('servicos');
    }

    public static function reprovar()
    {
        App::get('database')->update('servicos',[
            'status' => 'reprovado',
            'consideracoes' => $_POST['consideracoes'],
        ],[
            'id' => $_POST['servico']
        ]);

        $emailFuncionario = App::get('database')->selectWhere('usuarios',[
            'nome' => $_SESSION['funcionario']
        ]);

        foreach($emailFuncionario as $email){
            $email = $email->email;
        }

        Email::enviar('noreply@anatomymkt.com.br',$email,[
            'assunto' => $_SESSION['usuario']." acaba de Reprovar o serviço.", 
            'mensagem' => $_SESSION['usuario']." acaba de Reprovar o serviço pelo seguinte motivo:<br> ".$_POST['consideracoes']."."
        ]);

        redirect('servicos');
    }

    public static function cadastrar()
    {
        $nome = $_SESSION['usuario'];

        mkdir("private/enviosCliente/$nome"." - ".$_POST['titulo'], 0777, true);

        if($_FILES['arquivos']['size'] != 0){
            uploadFiles("private/enviosCliente/$nome"." - ".$_POST['titulo']."/", "arquivos");
        }

        App::get('database')->insert('servicos',[
            'categoria' => $_POST['categoria'],
            'titulo' => $_POST['titulo'],
            'descricao' => $_POST['descricao'],
            'produto' => $_POST['produto'],
            'clienteId' => $_SESSION['id'],
            'autor' => $_SESSION['usuario'],
            'prazo' => $_POST['prazo']
        ]);

        App::get('database')->insert('notificacoes',[
            'mensagem' => $_SESSION['usuario']." acaba de solicitar um serviço.",
            'status' => 'nao lida',
            'destinado' => $_SESSION['funcionario'],
            'tipo' => 'aviso'
        ]);

        $emailFuncionario = App::get('database')->selectWhere('usuarios',[
            'nome' => $_SESSION['funcionario']
        ]);

        foreach($emailFuncionario as $email){
            $emailFuncionario = $email->email;
        }

        Email::enviar('noreply@anatomymkt.com.br',$emailFuncionario,[
            'assunto' => $_SESSION['usuario']." acaba de solicitar um serviço.", 
            'mensagem' => $_SESSION['usuario']." solicitou um ".$_POST['produto']."<br>Você tem 7 dias para respondê-lo antes que o prazo se expire."
        ]);

        Email::enviar('noreply@anatomymkt.com.br',$_SESSION['email'],[
            'assunto' => "Sua solicitação foi realizada com êxito.", 
            'mensagem' => "Sua solicitação foi realizada com êxito e será respondida dentro do prazo de até 7 dias.
            <br><img src='http://sistema.anatomymkt.com.br/public/assets/img/anatomy.png' width='200px'>
            <br><a href='http://sistema.anatomymkt.com.br/'>Clique aqui para ser redirecionado ao Painel do Cliente.</a>
        "]);

        redirect('sucesso');
    }

}