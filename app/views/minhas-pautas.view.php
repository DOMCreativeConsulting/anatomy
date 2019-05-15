<?php include 'partials/head.php'; ?> 
<?php include 'partials/sidebarCliente.php'; ?>
<div id="right-panel" class="right-panel">
    <?php include 'partials/headerCliente.php'; ?>
    <div class="content">
    <h1 class="title">SUAS PAUTAS DE REDES SOCIAIS</h1>
    <div class="row">
        <div class="col-md-3 offset-md-9">
            <form method="POST">
                <div class="row">
                    <div class="col-xl-7 col-xs-6">
                        <select name="ordem" class="form-control">
                            <option value="antigos">A Mais Tempo</option>
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
            isset($_POST['ordem']) && $_POST['ordem'] == 'recentes' ? $ordem = array_reverse($servicos) : $ordem = $servicos;
            foreach($ordem as $servico):
                switch($servico->status)
                {
                    case 'aprovado':
                        $rgb = 'background-color:rgba(0,255,0,0.2);';
                        break;
                    case 'reprovado':
                        $rgb = 'background-color:rgba(255,0,0,0.2);';
                        break;
                    case 'aguardando aprovacao':
                        $rgb = 'background-color:rgba(255,255,0,0.2);';
                        break;
                    case 'cancelado':
                        $rgb = 'background-color:rgba(0,0,0,0.2);';
                        break;
                    case 'pendente':
                        $rgb = 'background-color:rgba(255,255,255,1);';
                    break;
                }
            if($nServicos <= $max):
                if($servico->categoria == 'pauta redes sociais' && $servico->destinado == $_SESSION['usuario'] || $servico->status == 'pauta redes sociais' && $_SESSION['funcao'] == 'admin'):
                    $nServicos++;
            ?>
                <div class="col-md-6">
                    <div class="card" style="<?=$rgb;?>">
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
                            <div class="row pT2">
                                <div class="col-md-12">
                                    <?php
                                    $pasta = $servico->destinado." - ".$servico->titulo;
                                    $dirname = "private/pautas/$pasta/";
                                    $images = glob($dirname."*.*");
                                    
                                    foreach($images as $image) {
                                        echo '<img class="miniaturaCard" src="'.$image.'" />';
                                    }
                                    ?>
                                    <?php @zip("$dirname", "private/pauta "."$servico->destinado"." $servico->titulo".".zip"); ?>
                                    <p class="col-md-12"><b><a href="private/pauta <?=$servico->destinado?> <?=$servico->titulo;?>.zip" download>Baixar Arquivos.</a></b></p>
                                </div>
                            </div>
                            <?php if($servico->status == 'aguardando aprovacao'): ?>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-sm-6 col-xs-6 pT4">
                                    <button style="background-color:rgba(255,0,0,0.5);" type="button" class="form-control toggleReprovar">Reprovar</button>
                                    <div class="reprovar">
                                    <form action="reprovar" method="POST">
                                        <textarea placeholder="Descreva o motivo..." name="consideracoes" class="form-control" id="consideracoes"></textarea>
                                        <button style="background-color:rgba(255,0,0,1);color:white" type="submit" name="servico" value="<?=$servico->id;?>" class="form-control">Reprovar</button>
                                    </form>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-6 col-xs-6 pT4">
                                    <form action="aprovar" method="POST">
                                        <button style="background-color:rgba(0,255,0,0.5);" type="submit" name="servico" value="<?=$servico->id;?>" class="form-control">Aprovar</button>
                                    </form>
                                </div></div>
                            </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php include 'partials/footerPainel.php'; ?>
</div>
