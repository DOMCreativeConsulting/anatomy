<?php

$base = 'anatomy';

$router->get("$base", 'IndexController@index');
$router->get("$base/servicos", 'ServicosController@index');
$router->post("$base/login", 'LoginController@login');
$router->get("$base/logout", 'LoginController@logout');
$router->get("$base/loginScreen", 'LoginController@loginScreen');
$router->get("$base/incorreto", 'LoginController@incorreto');
$router->post("$base/cadastrar", 'LoginController@cadastrar');;
$router->get("$base/signUp", 'LoginController@signUpScreen');
