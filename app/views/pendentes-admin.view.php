<?php include 'partials/head.php'; ?> 
<?php include 'partials/sidebar.php'; ?>
<div id="right-panel" class="right-panel">
    <?php include 'partials/header.php'; ?>
    <div class="content">
    <h1 class="title">SOLICITAÇÕES PENDENTES</h1>
    <div class="row">
        <div class="col-md-3 offset-md-9">
            <form method="POST">
                <div class="row">
                    <div class="col-xl-7 col-xs-6">
                        <select name="ordem" class="form-control">
                            <option value="antigos">Mais Antigas</option>
                            <option value="recentes">Últimas</option>
                            <option value="todos">Todos</option>
                        </select>
                    </div>
                    <div class="col-xl-5 col-xs-6">
                        <button type="submit" class="form-control">Filtrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
        <div class="row pT2">
            <?php 
            $nServicos = 1;
            isset($_POST['ordem']) && $_POST['ordem'] == 'todos' ? $max = 9999 : $max = 6; 
            isset($_POST['ordem']) && $_POST['ordem'] == 'recentes' ? $ordem = array_reverse($admin) : $ordem = $admin;
            foreach($ordem as $servico):
            if($nServicos <= $max):
                $diasRestantes = diasRestantes($servico->prazo);
                if($servico->status == 'pendente' && $servico->destinado == $_SESSION['usuario'] || $servico->status == 'pendente' && $_SESSION['funcao'] == 'admin'):
                    $nServicos++;
                    if($diasRestantes < 0): ?>

                    <div class="col-md-6">
                        <div class="card" style="background-color:rgba(0,0,0,0.4);">
                            <div class="card-body" style="text-align:justify;">
                                <div class="row">
                                    <h3 class="col-md-12 title3"><?=$servico->autor;?></h3>
                                    <div class="col-md-12 pT2">
                                        <h5 class="col-md-12"><b>Título: </b><?=$servico->titulo;?></h5>
                                    </div>
                                    <div class="col-md-12 pT2">
                                        <h5 class="col-md-12"><b>Categoria: </b><?=$servico->categoria;?></h5>
                                    </div>
                                    <div class="col-md-12 pT2">
                                        <h5 class="col-md-12"><b>Produto: </b><?=$servico->produto;?></h5>
                                    </div>
                                    <div class="col-md-12 pT2">
                                        <h5 class="col-md-12"><b>Prazo: </b><b style="color:red">Expirado</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <?php endif; ?>
                <?php if($diasRestantes >= 0): ?>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body" style="text-align:justify;">
                            <div class="row">
                                <h3 class="col-md-12 title3"><?=$servico->autor;?></h3>
                            </div>
                            <div class="row pT2">
                                <h5 class="col-md-12"><b>Categoria: </b><?=$servico->titulo;?></h5>
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
                            <?php if($servico->status == 'pendente'): ?>
                            <div class="row pT2">
                                <div class="col-md-12">
                                    <?php
                                    $pasta = $servico->autor." - ".$servico->titulo;
                                    $dirname = "private/enviosCliente/$pasta/";
                                    $images = glob($dirname."*.*");
                                    
                                    foreach($images as $image) {
                                        echo '<img class="miniaturaCard" src="'.$image.'" />';
                                    }
                                    ?>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="row pT2">
                                <?php @zip("private/$titulo", "private/$titulo.zip"); ?>
                                <p class="col-md-12"><b><a href="private/enviosCliente/<?=$servico->autor." - ".$servico->titulo;?>.zip" download>Baixar Arquivos.</a></b></p>
                            </div>
                            <div class="row pT2">
                            <?php if($servico->status == 'pendente'): ?>
                                <div class="col-xl-4 col-lg-6 col-sm-6 col-xs-6">
                                    <form action="cadastrar-entrega" method="POST">
                                        <button type="submit" name="servicoId" value="<?=$servico->id;?>" class="form-control">Entregar</button>
                                    </form>
                                </div>
                            <?php endif; ?>
                            </div>
                            <div class="row pT2" style="float:right">
                                <h6 class="col-md-12"><b>Status: </b><?=$servico->status;?></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php include 'partials/footerPainel.php'; ?>
</div>
