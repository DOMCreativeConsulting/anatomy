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
                session_start();
                $_SESSION['logado'] = 1;
                $_SESSION['usuario'] = $nome;
                $_SESSION['email'] = $email;
                $_SESSION['funcao'] = $funcao;
                redirect('painel');
            }
            else
            {
                ?>
                <script>
                alert("Usuário ou Senha Incorretos!");
                </script>
                <?php 
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
        if(!isset($_SESSION['user']))
        {
            return redirect('loginScreen');
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

}