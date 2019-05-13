<?php include 'partials/head.php'; ?> 
<?php include 'partials/sidebar.php'; ?>
<div id="right-panel" class="right-panel">
<?php include 'partials/header.php'; ?>

    <div class="content">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h1 class="title"><i style="color:grey;" class="fa fa-comment"></i> RESPONDER TICKET</h1>
                        <form method="POST" action="resolver">
                            <div class="row">
                                <?php foreach($tickets as $ticket): ?>
                                <?php if($ticket->id == $escolhido): ?>

                                <div class="col-md-4 pT4">
                                    <p><b>Título</b>: <?=$ticket->titulo;?></p>
                                </div>
                                <div class="col-md-4 pT4">
                                    <p><b>Autor</b>: <?=$ticket->autor;?></p>
                                </div>
                                <div class="col-md-4 pT4">
                                    <p><b>Categoria</b>: <?=$ticket->categoria;?></p>
                                </div>
                                <div class="col-md-12 pT2">
                                    <p><b>Mensagem</b>:<br><?=$ticket->texto;?></p>
                                </div>
                                <div class="col-md-12 pT2">
                                    <textarea class="form-control" placeholder="Digite aqui sua resposta ao ticket..." name="resposta"></textarea>
                                </div>
                                <div class="col-md-12 pT7">
                                    <input type="hidden" name="id" value="<?=$ticket->id;?>">
                                    <input type="hidden" name="cliente" value="<?=$ticket->autor;?>">
                                    <button type="submit" class="form-control">Enviar</button>
                                </div>

                            <?php endif; ?>
                            <?php endforeach; ?>
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
