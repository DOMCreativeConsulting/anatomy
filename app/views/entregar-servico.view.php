<?php include 'partials/head.php'; ?> 
<?php include 'partials/sidebarCliente.php'; ?>
<div id="right-panel" class="right-panel">
    <?php include 'partials/header.php'; ?>
    <div class="content">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card solicitarServicos">
                    <div class="card-body">
                        <form method="POST" action="entregar">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nome">Título: </label>
                                    <input type="text" name="nome" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="servico">Serviço: </label>
                                    <input list="servicos" name="servico" class="form-control" required>
                                    <datalist id="servicos">
                                    <?php foreach ($servicos as $servico): ?>
                                        <option value="<?=$servico->id?>"><?=$servico->titulo;?></option>
                                    <?php endforeach; ?>
                                    </datalist>
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="descricao" placeholder="Corpo da mensagem..." required></textarea>
                                </div>
                                <div class="col-md-4 offset-md-4">
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
</div>