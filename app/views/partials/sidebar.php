<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                <?php if($_SESSION['funcao'] == 'admin'): ?>
                    <li class="active">
                        <a href="./"><i class="menu-icon fa fa-dashboard"></i>Painel </a>
                    </li>
                    <li class="menu-title">Solicitações</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Serviços</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="fa fa-copy"></i><a href="servicos">Ver Todos</a></li>
                            <li><i class="fa fa-user"></i><a href="por-cliente">Por Cliente</a></li>
                            <li><i class="fa fa-clock-o"></i><a href="pendentes">Pendentes</a></li>
                            <li><i class="fa fa-check"></i><a href="aprovados">Aprovados</a></li>
                            <li><i class="fa fa-clock-o"></i><a href="aguardando-aprovacao">Aguardando Aprovação</a></li>
                            <li><i class="fa fa-times"></i><a href="reprovados">Reprovados</a></li>
                            <li><i class="fa fa-times-circle"></i><a href="cancelados">Cancelados</a></li>
                            <li><i class="fa fa-envelope"></i><a href="cadastrar-entrega">Entregar</a></li>
                            <li><i class="fa fa-facebook"></i><a href="cadastrar-pauta">Enviar Pauta</a></li>
                            <li><i class="fa fa-user"></i><a href="simular-cliente">Simular Cliente</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tags"></i>Tickets</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="fa fa-clock-o"></i><a href="tickets-pendentes">Em Aberto</a></li>
                            <li><i class="fa fa-check"></i><a href="tickets-resolvidos">Resolvidos</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">Gerenciar</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Usuários </a>
                        <ul class="sub-menu children dropdown-menu"> 
                            <li><i class="menu-icon fa fa-user-plus"></i><a href="cadastrar-cliente">Cadastrar Cliente</a></li>
                            <li><i class="menu-icon fa fa-user-plus"></i><a href="cadastrar-usuario">Cadastrar Usuário</a></li>
                            <li><i class="menu-icon fa fa-pencil"></i><a href="editar-usuario">Editar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="notificacoes"> <i class="menu-icon fa fa-bell"></i>Notificações </a>
                    </li>
                <?php endif; ?>

                <?php if($_SESSION['funcao'] == 'jornalista' || $_SESSION['funcao'] == 'designer'): ?>
                    <li class="active">
                        <a href="./"><i class="menu-icon fa fa-dashboard"></i>Painel </a>
                    </li>
                    <li class="menu-title">Solicitações</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Serviços</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="fa fa-copy"></i><a href="servicos">Ver Todos</a></li>
                            <li><i class="fa fa-user"></i><a href="por-cliente">Por Cliente</a></li>
                            <li><i class="fa fa-clock-o"></i><a href="pendentes">Pendentes</a></li>
                            <li><i class="fa fa-check"></i><a href="aprovados">Aprovados</a></li>
                            <li><i class="fa fa-clock-o"></i><a href="aguardando-aprovacao">Aguardando Aprovação</a></li>
                            <li><i class="fa fa-times"></i><a href="reprovados">Reprovados</a></li>
                            <li><i class="fa fa-times-circle"></i><a href="cancelados">Cancelados</a></li>
                            <li><i class="fa fa-envelope"></i><a href="cadastrar-entrega">Entregar</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tags"></i>Tickets</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="fa fa-clock-o"></i><a href="tickets-pendentes">Em Aberto</a></li>
                            <li><i class="fa fa-check"></i><a href="tickets-resolvidos">Resolvidos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-bell"></i>Notificações </a>
                    </li>
                <?php endif; ?>
                    
                </ul>
            </div>
        </nav>
    </aside>