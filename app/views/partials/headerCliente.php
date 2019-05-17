<header id="header" style="height:66px !important" class="header">
    <?php
    use App\Model\Notificacoes; 

    $notificacoes = Notificacoes::buscar();

        $nAvisos = 0;
        $nTickets = 0;

        foreach($notificacoes as $notificacao):
            if($notificacao->destinado == $_SESSION['usuario'] && $notificacao->status == 'nao lida'):
                if($notificacao->tipo == 'aviso'){
                    $nAvisos++;
                }
                else{
                    $nTickets++;
                }
            endif;
        endforeach; ?>

            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="public/assets/img/anatomy.png" width="100px" alt="Logo"></a>
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
                                <span class="count bg-danger"><?=$nAvisos;?></span>
                            </button>

                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">Você tem <?=$nAvisos;?> notificações.</p>

                            <?php foreach($notificacoes as $notificacao):
                                if($notificacao->destinado == $_SESSION['usuario'] && $notificacao->tipo == 'aviso'): ?>
                                <form id="formAviso" action="marcar-lida" method="POST">
                                    <input type="hidden" name="notificacaoId" value="<?=$notificacao->id;?>">
                                    <input type="hidden" name="tipo" value="aviso">
                                    <a class="dropdown-item media" href="javascript:{}" onclick="document.getElementById('formAviso').submit();">
                                        <i class="fa fa-bell"></i>
                                        <p><?=$notificacao->mensagem;?></p>
                                    </a>
                                </form>
                            <?php endif;
                                endforeach; ?>

                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary"><?=$nTickets;?></span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">

                            <?php foreach($notificacoes as $notificacao):
                                if($notificacao->destinado == $_SESSION['usuario'] && $notificacao->tipo == 'ticket' && $notificacao->status == 'nao lida'): ?>
                                        <form id="form" action="marcar-lida" method="POST">
                                            <input type="hidden" name="notificacaoId" value="<?=$notificacao->id;?>">
                                            <a class="dropdown-item media" href="javascript:{}" onclick="document.getElementById('form').submit();">
                                                <span class="photo media-left"><img alt="avatar" src="public/assets/img/user-icon.jpg"></span>
                                                <div class="message media-body">
                                                    <span class="name float-left"><?=$notificacao->mensagem;?></span>
                                                    <p>Clique para vizualizar.</p>
                                                </div>
                                            </a>
                                        </form>
                            <?php endif;
                                endforeach; ?>

                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="public/assets/img/user-icon.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i><?=$_SESSION['logado'] == 1 ? "Bem vindo " . $_SESSION['usuario'] : "Deslogado" ?></a>
                        
                            <a class="nav-link" href="minha-conta"><i class="fa fa- user"></i>Minha conta</a>

                            <a class="nav-link" href="logout"><i class="fa fa-power -off"></i>Sair</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>