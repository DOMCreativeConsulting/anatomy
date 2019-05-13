<?php include 'partials/head.php'; ?> 
<?php include 'partials/sidebar.php'; ?>
<div id="right-panel" class="right-panel">
    <?php include 'partials/header.php'; ?>
    <div class="content">
    <h1 class="title">TODAS AS SOLICITAÇÕES DE <b><?=$selecionado;?></b></h1>

        <div class="row pT2">
            <?php 
            $nServicos = 1;
            isset($_POST['ordem']) && $_POST['ordem'] == 'todos' ? $max = 9999 : $max = 999; 
            isset($_POST['ordem']) && $_POST['ordem'] == 'recentes' ? $ordem = array_reverse($servicos) : $ordem = $servicos;
            foreach($ordem as $servico):
            if($nServicos <= $max):
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
                if($servico->autor == $selecionado):
                    $nServicos++;
            ?>
                <div class="col-md-6">
                    <div class="card" style="<?=$rgb;?>">
                        <div class="card-body" style="text-align:justify; ">
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
                            
                            <?php if($servico->status == 'reprovado'): ?>
                                <div class="row pT2">
                                    <p class="col-md-12"><b>Considerações: </b><?=$servico->consideracoes;?></p>
                                </div>
                                <div class="row pT2">
                                    <div class="col-xl-4 col-lg-6 col-sm-6 col-xs-6">
                                        <button type="button" id="toggleEnviarNovo" name="servicoId" value="<?=$servico->id;?>" class="form-control">Enviar novo</button>
                                    </div>
                                    <div id="enviar-novo" class="col-md-12 pT2">
                                        <form action="entregar-novo" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <input type="hidden" value="<?=$servico->id;?>" name="servico">
                                                <input type="text" class="form-control" name="nome" placeholder="Novo título">
                                                <textarea class="form-control" placeholder="mensagem..." name="descricao"></textarea>
                                                <label for="file-upload" style="background-color:white !important;" class="col-md-6 custom-file-upload">
                                                    Enviar Arquivos
                                                </label>
                                                <input type="file" id="file-upload" name="arquivos[]" multiple required>
                                                <button type="submit" class="col-md-6 form-control">Enviar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="row pT2">
                            <?php if($servico->status == 'pendente'): ?>
                            <div class="col-md-12">
                                <?php @zip("private/enviosCliente/$servico->autor"." - "."$servico->titulo", "private/enviosCliente/$servico->autor"." - "."$servico->titulo.zip"); ?>
                                <p class="col-md-12"><b><a href="private/enviosCliente/<?=$servico->autor." - ".$servico->titulo;?>.zip" download>Baixar Arquivos.</a></b></p>
                            </div>
                                <div class="col-xl-4 col-lg-6 col-sm-6 col-xs-6">
                                    <form action="cadastrar-entrega" method="POST">
                                        <button style="<?=$rgb;?>" type="submit" name="servicoId" value="<?=$servico->id;?>" class="form-control">Entregar</button>
                                    </form>
                                </div>
                            <?php endif; ?>
                                <div class="col-md-12" style="text-align:right;">
                                    <h6 class="col-md-12"><b>Status: </b><?=$servico->status;?></h6>
                                </div>
                            </div>
                            
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
