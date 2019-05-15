<?php

namespace App\Model;
use App\Model\Model;
use App\Core\App;

class User
{

    public static function login()
    {
        if(isset($_POST['usuario']))
        {

            $dados['usuario'] = $_POST['usuario'];
            $dados['senha'] = $_POST['senha'];

            $resultado = App::get('database')->selectWhere('usuarios',$dados);

            foreach($resultado as $dado)
            {
                $nome = $dado->nome;
                $email = $dado->email;
                $funcao = $dado->funcao;
                $id = $dado->id;
                $funcionario = $dado->funcionario;
                $endereco = $dado->endereco;
                $nascimento = $dado->nascimento;
            }

            if(!empty($resultado))
            {
                $_SESSION['logado'] = 1;
                $_SESSION['usuario'] = $nome;
                $_SESSION['email'] = $email;
                $_SESSION['funcao'] = $funcao;
                $_SESSION['id'] = $id;
                $_SESSION['funcionario'] = $funcionario;
                $_SESSION['endereco'] = $endereco;
                $_SESSION['nascimento'] = $nascimento;
                redirect('./');
            }
            else
            {
                redirect('incorreto');
            }

            return $resultado;

        }
    }

    public static function buscar()
    {
        return App::get('database')->selectAll('usuarios');
    }

    public static function logout()
    {
        session_destroy();
        redirect('loginScreen');
    }

    public static function check()
    {
        if(!isset($_SESSION['usuario']) && $_SESSION['logado'] != 1)
        {
            return redirect('loginScreen');
        }
    }

    public static function cadastrar()
    {
        if(isset($_POST['funcionario']))
        {
            App::get('database')->insert('usuarios', [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'sexo' => $_POST['sexo'],
                'endereco' => $_POST['endereco'],
                'nascimento' => $_POST['nascimento'],
                'cpf' => $_POST['cpf'],
                'telefone' => $_POST['telefone'],
                'usuario' => $_POST['usuario'],
                'senha' => $_POST['senha'],
                'cep' => $_POST['cep'],
                'funcionario' => $_POST['funcionario']
            ]);
        }

        if(isset($_POST['funcao']))
        {
            App::get('database')->insert('usuarios', [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'sexo' => $_POST['sexo'],
                'usuario' => $_POST['usuario'],
                'senha' => $_POST['senha'],
                'funcao' => $_POST['funcao']
            ]);
        }
        

        if(isset($_POST['funcionario']))
        {
            $_SESSION['sucesso'] = true;
            redirect('cadastrar-cliente');
        }

        if(isset($_POST['funcao']))
        {
            $_SESSION['sucesso'] = true;
            redirect('cadastrar-usuario');
        }

    }

    public static function IsAdmin()
    {
        if(isset($_SESSION['user']) && $_SESSION['user'] == 'admin')
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public static function clientes()
    {
        return App::get('database')->selectWhere('usuarios',["funcao" => "cliente"]);
    }

    public static function funcionarios()
    {
        return App::get('database')->selectWhereNot('usuarios',["funcao" => "cliente"]);
    }

    public static function view()
    {

        switch ($_SESSION['funcao'])
        {
            case 'admin';
            return 'admin';

            case 'cliente';
            return 'cliente';

            case 'jornalista';
            return 'jornalista';

            case 'designer';
            return 'designer';

            default;
            return '404';
        }

    }

}