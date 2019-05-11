<?php include 'partials/head.php'; ?> 
<?php include 'partials/sidebarCliente.php'; ?>
<div id="right-panel" class="right-panel">
    <?php include 'partials/header.php'; ?>
    <div class="content">
    <h1 class="title">SOLICITAÇÕES</h1>
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
            if($nServicos <= $max && $servico->autor == $_SESSION['usuario']):
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
                            <div class="row pT2">
                            <?php 
                            if(
                            $servico->status != 'aprovado' && 
                            $servico->status != 'reprovado' && 
                            $servico->status != 'cancelado' && 
                            $servico->status != 'aguardando aprovacao'
                            ): 
                            ?>
                                <div class="col-xl-4 col-lg-6 col-sm-6 col-xs-6">
                                    <form action="cancelar" method="POST">
                                        <button style="background-color:rgba(255,0,0,0.5);" type="submit" name="servico" value="<?=$servico->id;?>" class="form-control">Cancelar</button>
                                    </form>
                                </div>
                            <?php 
                            endif;
                            if($servico->status == 'aguardando aprovacao'): ?>
                            <button type="button" id="botaoToggle" style="background-color:rgba(0,0,0,0.1);height:40px;" class="btn col-md-6">Ver Resposta</button>
                            <div class="pT2 col-md-12" id="toggle">
                                <div class="col-md-12">
                                    <?php foreach ($produtos as $produto){
                                        if($produto->pedidoId == $servico->id){
                                            $texto = $produto->descricao;
                                            $titulo = $produto->nome;
                                        }
                                    }

                                    @zip("private/$titulo", "private/$titulo.zip");

                                    ?>
                                    <p><?=$texto;?></p>
                                    <b><a href="private/<?=$titulo?>.zip" download>Baixar Arquivos.</a></b>
                                </div><div class="row">
                                <div class="col-xl-6 col-lg-6 col-sm-6 col-xs-6 pT4">
                                    <button style="background-color:rgba(255,0,0,0.5);" type="button" id="toggleReprovar" class="form-control">Reprovar</button>
                                    <div id="reprovar">
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
                            <?php endif; ?>
                                <div class="col-md-12 pT2" style="text-align:right;">
                                    <h6 class="col-md-12"><b>Status: </b><?=$servico->status;?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php include 'partials/footerPainel.php'; ?>
</div>
