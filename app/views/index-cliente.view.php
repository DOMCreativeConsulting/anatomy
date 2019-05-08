<?php include 'partials/head.php'; ?>
    
<?php include 'partials/sidebarCliente.php'; ?>

    <div id="right-panel" class="right-panel">

        <?php include 'partials/header.php'; ?>

        <?php
        $nServicos = 0;
        foreach($servicos as $servico){
            $nServicos++;
        }
        ?>

        <div class="content">

            <h1 class="title">Bem Vindo <?=$_SESSION['usuario']; ?></h1>
            <h2 class="title2">Você solicitou <?=$nServicos; ?> serviços ao total.</h2>
            
        </div>

    <div class="clearfix"></div>
    
<?php include 'partials/footerPainel.php'; ?>
