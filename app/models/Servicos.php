<?php

namespace App\Model;
use App\Model\Model;
use App\Core\App;

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

    public static function cadastrar()
    {
        App::get('database')->insert('servicos',[
            'categoria' => $_POST['categoria'],
            'titulo' => $_POST['titulo'],
            'descricao' => $_POST['descricao'],
            'produto' => $_POST['produto'],
            'clienteId' => $_SESSION['id'],
            'autor' => $_SESSION['usuario']
        ]);
    }

}