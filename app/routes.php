<?php

$base = 'anatomy';

$router->get("$base", 'IndexController@index');
$router->get("$base/solicitacoes", 'SolicitacoesController@index');
$router->post("$base/login", 'LoginController@login');
$router->get("$base/loginScreen", 'LoginController@loginScreen');
$router->get("$base/cadastrar", 'LoginController@cadastrar');
