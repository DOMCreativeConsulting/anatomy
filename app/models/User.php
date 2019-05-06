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
            }

            if(!empty($resultado))
            {
                $_SESSION['logado'] = 1;
                $_SESSION['usuario'] = $nome;
                $_SESSION['email'] = $email;
                $_SESSION['funcao'] = $funcao;
                redirect('./');
            }
            else
            {
                redirect('incorreto');
            }

            return $resultado;

        }
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
        App::get('database')->insert('usuarios', [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'sexo' => $_POST['sexo'],
            'nascimento' => $_POST['nascimento'],
            'cpf' => $_POST['cpf'],
            'telefone' => $_POST['telefone'],
            'funcao' => $_POST['funcao'],
            'usuario' => $_POST['usuario'],
            'senha' => $_POST['senha']
        ]);

        return redirect('signUp');
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

    public static function funcionarios()
    {
        $resultado = App::get('database')->selectWhereNot('usuarios',["funcao" => "cliente"]);

        return $resultado;
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