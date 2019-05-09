<?php include 'partials/head.php'; ?> 
<?php include 'partials/sidebarCliente.php'; ?>
<div id="right-panel" class="right-panel">
    <?php include 'partials/header.php'; ?>
    <div class="content">
    <h1 class="title">SUAS SOLICITAÇÕES</h1>
        <div class="row pT2">
            <?php foreach($servicos as $servico): ?>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body" style="text-align:justify;">
                            <div class="row">
                                <h3 class="col-md-12 title3"><?=$servico->titulo;?></h3>
                            </div>
                            <div class="row pT2">
                                <h5 class="col-md-12"><b>Categoria: </b><?=$servico->categoria;?></h5>
                            </div>
                            <div class="row pT2">
                                <h5 class="col-md-12"><b>Produto: </b><?=$servico->produto;?></h5>
                            </div>
                            <div class="row pT2">
                                <p class="col-md-12"><b>Descrição: </b><?=$servico->descricao;?></p>
                            </div>
                            <div class="row pT2" style="float:right">
                                <h6 class="col-md-12"><b>Status: </b><?=$servico->status;?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php include 'partials/footerPainel.php'; ?>
</div>
