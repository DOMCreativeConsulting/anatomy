<?php

$base = 'anatomy';

$router->get("$base", 'IndexController@index');
$router->get("$base/servicos", 'ServicosController@index');
$router->post("$base/login", 'LoginController@login');
$router->get("$base/logout", 'LoginController@logout');
$router->get("$base/loginScreen", 'LoginController@loginScreen');
$router->get("$base/incorreto", 'LoginController@incorreto');
$router->post("$base/cadastrar", 'LoginController@cadastrar');;
$router->get("$base/cadastrar-cliente", 'LoginController@cadastrarCliente');
$router->get("$base/cadastrar-usuario", 'LoginController@cadastrarUsuario');
$router->get("$base/editar-usuario", 'UserController@index');
$router->get("$base/solicitar-servicos", 'ServicosController@solicitar');
$router->post("$base/solicitar", 'ServicosController@cadastrar');
$router->get("$base/meus-servicos", 'ServicosController@index');
