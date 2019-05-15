<?php include 'partials/head.php'; ?> 
<?php include 'partials/sidebar.php'; ?>
<div id="right-panel" class="right-panel">
<?php include 'partials/header.php'; ?>

    <div class="content">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h1 class="title"><i style="color:grey;" class="fa fa-instagram"></i> CRIAR UMA PAUTA</h1>
                        <form method="POST" action="cadastrarPauta" id="uploadForm" class="formServico" enctype='multipart/form-data'>
                            <div class="row">
                                <div class="col-md-6 pT2">
                                    <label for="cliente">Cliente: </label>
                                    <select name="cliente" class="form-control" required>
                                        <?php foreach($clientes as $cliente): ?>
                                            <option value="<?=$cliente->id;?>"><?=$cliente->nome;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-6 pT2">
                                    <label for="titulo">Título: </label>
                                    <input type="text" class="form-control" name="titulo" required>
                                </div>
                                <div class="col-md-6 pT2">
                                    <label for="dia">Dia da postagem: </label>
                                    <input type="date" class="form-control" name="dia" required>
                                </div>
                                <div class="col-md-6 pT2">
                                    <label for="rede">Rede Social: </label>
                                    <select name="rede" class="form-control" required>
                                        <option value="facebook">Facebook</option>
                                        <option value="instagram">Instagram</option>
                                        <option value="facebook e instagram">Facebook e Instagram</option>
                                        <option value="outra">Outra</option>
                                    </select>
                                </div>
                                <div class="col-md-12 pT2">
                                    <label for="texto">Texto: </label>
                                    <textarea class="form-control col-md-12" name="texto" required></textarea>
                                </div>
                                <div class="col-md-4 offset-md-4 pT3">
                                    <label for="file-upload" class="custom-file-upload">
                                        Enviar Arquivos
                                    </label>
                                    <input type="file" id="file-upload" name="arquivos[]" multiple required>
                                </div>
                                <div class="col-md-12 pT7 pB7">
                                    <button type="submit" class="form-control">Enviar</button>
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
