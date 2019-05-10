<?php

$base = 'anatomy';

$router->get("$base", 'IndexController@index');

$router->post("$base/servicos", 'ServicosController@index');
$router->post("$base/pendentes", 'ServicosController@pendentes');
$router->post("$base/aprovados", 'ServicosController@aprovados');
$router->post("$base/reprovados", 'ServicosController@reprovados');
$router->post("$base/aguardando-aprovacao", 'ServicosController@aguardandoAprovacao');
$router->post("$base/cancelados", 'ServicosController@cancelados');

$router->get("$base/servicos", 'ServicosController@index');
$router->get("$base/pendentes", 'ServicosController@pendentes');
$router->get("$base/aprovados", 'ServicosController@aprovados');
$router->get("$base/reprovados", 'ServicosController@reprovados');
$router->get("$base/aguardando-aprovacao", 'ServicosController@aguardandoAprovacao');
$router->get("$base/cancelados", 'ServicosController@cancelados');

$router->post("$base/login", 'LoginController@login');
$router->get("$base/logout", 'LoginController@logout');
$router->get("$base/loginScreen", 'LoginController@loginScreen');
$router->get("$base/incorreto", 'LoginController@incorreto');
$router->post("$base/cadastrar", 'LoginController@cadastrar');

$router->get("$base/cadastrar-cliente", 'LoginController@cadastrarCliente');
$router->get("$base/cadastrar-usuario", 'LoginController@cadastrarUsuario');

$router->get("$base/editar-usuario", 'UserController@index');

$router->get("$base/solicitar-servicos", 'ServicosController@solicitar');
$router->post("$base/solicitar", 'ServicosController@cadastrar');
$router->get("$base/meus-servicos", 'ServicosController@index');
$router->post("$base/entregar", 'ServicosController@entregar');
$router->get("$base/cadastrar-entrega", 'ServicosController@cadastrarEntrega');
$router->post("$base/cadastrar-entrega", 'ServicosController@cadastrarEntrega');

$router->post("$base/cancelar", 'ServicosController@cancelar');