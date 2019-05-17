<?php include 'partials/head.php'; ?> 
<?php include 'partials/sidebar.php'; ?>
<div id="right-panel" class="right-panel">
    <?php include 'partials/header.php'; ?>
    <div class="content">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card solicitarServicos">
                    <div class="card-body">
                        <form method="POST" action="entregar" class="formServico" enctype="multipart/form-data" id="uploadForm">
                            <h1 class="title">ENTREGAR UM SERVIÇO</h1>
                            <div class="row pT4">
                                <div class="col-md-6">
                                    <label for="nome">Título: </label>
                                    <input type="text" name="nome" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="servico">Serviço: </label>
                                    <input <?php isset($_POST['servicoId']) ? $valor = $_POST['servicoId'] : $valor = ''; ?> value="<?=$valor;?>" list="servicos" name="servico" class="form-control" placeholder="#id" required>
                                    <datalist id="servicos">
                                    <?php foreach ($servicos as $servico): 
                                        if($servico->status == 'pendente'): ?>
                                            <option value="<?=$servico->id?>"><?=$servico->titulo;?></option>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                    </datalist>
                                </div>
                                <div class="col-md-12 pT3">
                                    <textarea class="form-control" name="descricao" placeholder="Corpo da mensagem..." required></textarea>
                                </div>
                                <div class="col-md-4 offset-md-4 pT3">
                                    <label for="file-upload" class="custom-file-upload">
                                        Enviar Arquivos
                                    </label>
                                    <input type="file" id="file-upload" name="arquivos[]" multiple>
                                </div>
                                <div class="col-md-12" style="text-align:center">
                                    <p style="list-style:none;" id="file-name">
                                    </p>
                                </div>
                                <div class="col-md-4 offset-md-4 pT3 pB7">
                                    <button type="submit" class="form-control">Entregar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php include 'partials/footerPainel.php'; ?>
    <?php checkSuccess(); ?>
</div>