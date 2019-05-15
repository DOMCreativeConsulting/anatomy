<?php include 'partials/head.php'; ?>
    
<?php include 'partials/sidebarCliente.php'; ?>

    <div id="right-panel" class="right-panel">

        <?php include 'partials/headerCliente.php'; ?>

        <?php
        $nServicos = 0;
        foreach($servicos as $servico){
            if($servico->categoria != 'pauta redes sociais'){
                $nServicos++;
            }
        }

        $nTickets = 0;
        foreach($tickets as $ticket){
            $nTickets++;
        }

        $nAguardando = 0;
        foreach($servicos as $servico){
            if($servico->status == 'aguardando aprovacao'){
                $nAguardando++;
            }
        }
        ?>

        <div class="content">

            <h1 class="title">Bem Vindo <?=$_SESSION['usuario']; ?></h1>
            <div class="row pT2">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-print"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?=$nServicos;?></span></div>
                                            <div class="stat-heading">Serviços Solicitados</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?=$nTickets;?></span></div>
                                            <div class="stat-heading">Tickets Criados</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-like2"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?=$nAguardando;?></span></div>
                                            <div class="stat-heading">Serviços Aguardam Aprovação</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>

    <div class="clearfix"></div>
    
<?php include 'partials/footerPainel.php'; ?>
