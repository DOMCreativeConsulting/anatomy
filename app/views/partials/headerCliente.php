<header id="header" class="header">
    <?php
    use App\Model\Notificacoes;

    $notificacoes = Notificacoes::buscar();

        $nNotificacoes = 0;

        foreach($notificacoes as $notificacao):
            if($notificacao->destinado == 'cliente' && $notificacao->status == 'nao lida'):

            $nNotificacoes++;

            endif;
        endforeach; ?>

            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="public/assets/img/anatomy.png" height="40px" width="100px" alt="Logo"></a>
                    <!--<a class="navbar-brand hidden" href="./"><img src="public/theme/images/logo2.png" alt="Logo"></a>-->
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger"><?=$nNotificacoes;?></span>
                            </button>

                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">Você tem <?=$nNotificacoes;?> notificações.</p>

                            <?php foreach($notificacoes as $notificacao):
                                if($notificacao->destinado == 'cliente'): ?>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p><?=$notificacao->mensagem;?></p>
                                </a>
                            <?php endif;
                                endforeach; ?>

                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">1</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">Os Tickets serão implementados em breve.</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="public/assets/img/user-icon.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cliente</span>
                                        <p>Preview da mensagem.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="public/assets/img/user-icon.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i><?=$_SESSION['logado'] == 1 ? "Bem vindo " . $_SESSION['usuario'] : "Deslogado" ?></a>
                        
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Minha conta</a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Configurações</a>

                            <a class="nav-link" href="logout"><i class="fa fa-power -off"></i>Sair</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>