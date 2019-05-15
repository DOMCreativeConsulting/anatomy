<?php include 'partials/head.php'; ?> 
<?php include 'partials/sidebar.php'; ?>
<div id="right-panel" class="right-panel">
    <?php include 'partials/header.php'; ?>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card editarUsuarios">
                    <div class="card-body">
                        <h1 class="title pB2">NOTIFICAÇÕES</h1>
                        <table class="usuarios">
                            <thead>
                                <tr>
                                    <th class="usuario">Id: </th>
                                    <th class="usuario">Mensagem: </th>
                                    <th class="usuario">Destinado: </th>
                                    <th class="usuario">Tipo: </th>
                                    <th class="usuario">Status: </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($notificacoes as $notificacao):
                                ?>
                                <tr>
                                    <td class="usuario">#<?=$notificacao->id;?></td>
                                    <td class="usuario"><?=$notificacao->mensagem;?></td>
                                    <td class="usuario"><?=$notificacao->destinado;?></td>
                                    <td class="usuario"><?=$notificacao->tipo;?></td>
                                    <td class="usuario"><?=$notificacao->status;?></td>
                                </tr>
                                <?php 
                                endforeach; 
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php include 'partials/footerPainel.php'; ?>
</div>
