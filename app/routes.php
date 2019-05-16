<?php

$base = 'anatomy';

$router->get("$base", 'IndexController@index');
$router->get("$base/embreve", 'IndexController@embreve');

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
$router->get("$base/por-cliente", 'ServicosController@porCliente');

$router->post("$base/login", 'LoginController@login');
$router->get("$base/logout", 'LoginController@logout');
$router->get("$base/loginScreen", 'LoginController@loginScreen');
$router->get("$base/incorreto", 'LoginController@incorreto');
$router->post("$base/cadastrar", 'LoginController@cadastrar');

$router->get("$base/cadastrar-cliente", 'LoginController@cadastrarCliente');
$router->get("$base/cadastrar-usuario", 'LoginController@cadastrarUsuario');

$router->get("$base/editar-usuario", 'UserController@index');
$router->get("$base/minha-conta", 'UserController@minhaConta');

$router->get("$base/solicitar-servicos", 'ServicosController@solicitar');
$router->post("$base/solicitar", 'ServicosController@cadastrar');
$router->get("$base/meus-servicos", 'ServicosController@index');
$router->post("$base/meus-servicos", 'ServicosController@index');
$router->post("$base/entregar", 'ServicosController@entregar');
$router->get("$base/cadastrar-entrega", 'ServicosController@cadastrarEntrega');
$router->post("$base/cadastrar-entrega", 'ServicosController@cadastrarEntrega');
$router->post("$base/entregar-novo", 'ServicosController@entregarNovo');
$router->post("$base/filtrar-cliente", 'ServicosController@filtraCliente');
$router->get("$base/cadastrar-pauta", 'ServicosController@cadastrarPautaTela');
$router->post("$base/cadastrarPauta", 'ServicosController@cadastrarPauta');
$router->get("$base/minhas-pautas", 'ServicosController@minhasPautas');
$router->get("$base/simular-cliente", 'ServicosController@simularCliente');
$router->post("$base/simular", 'ServicosController@simular');

$router->post("$base/cancelar", 'ServicosController@cancelar');
$router->post("$base/aprovar", 'ServicosController@aprovar');
$router->post("$base/reprovar", 'ServicosController@reprovar');

$router->get("$base/ticket", 'TicketsController@index');
$router->post("$base/abrir-ticket", 'TicketsController@abrir');
$router->post("$base/resolver-ticket", 'TicketsController@resolverTicket');
$router->post("$base/resolver", 'TicketsController@resolver');
$router->get("$base/meus-tickets", 'TicketsController@meusTickets');
$router->get("$base/tickets-pendentes", 'TicketsController@pendentes');
$router->get("$base/tickets-resolvidos", 'TicketsController@resolvidos');

$router->post("$base/marcar-lida", 'NotificacoesController@marcarLida');
$router->get("$base/notificacoes", 'NotificacoesController@todas');

$router->get("$base/sucesso", 'IndexController@sucesso');