<?php include 'partials/head.php'; ?> 
<?php include 'partials/sidebarCliente.php'; ?>
<div id="right-panel" class="right-panel">
    <?php include 'partials/headerCliente.php'; ?>
    <div class="content">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card solicitarServicos">
                    <div class="card-body" style="background-color:#03A9F3;border-radius:0.25rem;box-shadow:0 0 20px rgba(0, 0, 0, 0.08);">

                        <form class="formServico" action="solicitar" method="POST" enctype="multipart/form-data" id="uploadForm">
                            <h1 class="title2">SOLICITAR SERVIÇO</h1>
                            <div class="row pT3">
                                <div class="col-md-6">
                                    <label for="titulo">Título: </label>
                                    <input type="text" class="form-control" name="titulo" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="categoria">Categoria: </label>
                                    <select name="categoria" id="categoriaSelect" class="form-control" required>
                                        <option>Selecione</option>
                                        <option value="Impresso">Impresso</option>
                                        <option value="Digital">Digital</option>
                                        <option value="Redação">Redação</option>
                                        <option value="Vídeo">Vídeo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row pT2">
                                <div class="col-md-6">
                                    <label for="produto">Produto: </label>
                                    <input id="produto" list="produtos" class="form-control" name="produto" required>
                                    <datalist id="produtos">
                                        <option id="impressos">Flyer 4x0 (somente frente) - Materiais Impressos</option>
                                        <option id="impressos">Flyer 4x4 (frente e verso) - Materiais Impressos</option>
                                        <option id="impressos">Folder 1 dobra - Materiais Impressos</option>
                                        <option id="impressos">Folder 2 dobras - Materiais Impressos</option>
                                        <option id="impressos">Folder Paginado até 10 pgs - Materiais Impressos</option>
                                        <option id="impressos">Folder Paginado de 11 a 20 pgs - Materiais Impressos</option>
                                        <option id="impressos">Cartão de visitas - Materiais Impressos</option>
                                        <option id="impressos">Pasta - Materiais Impressos</option>
                                        <option id="impressos">Envelope carta - Materiais Impressos</option>
                                        <option id="impressos">Envelope A4 - Materiais Impressos</option>
                                        <option id="impressos">Receituário simples - Materiais Impressos</option>
                                        <option id="impressos">Receituário especial - Materiais Impressos</option>
                                        <option id="impressos">Bloco orçamento - Materiais Impressos</option>
                                        <option id="impressos">Bloco de notas - Materiais Impressos</option>
                                        <option id="impressos">Crachá - Materiais Impressos</option>
                                        <option id="impressos">Folha timbrada - Materiais Impressos</option>
                                        <option id="impressos">Banner - Materiais Impressos</option>
                                        <option id="impressos">Cartaz - Materiais Impressos</option>
                                        <option id="digitais">Assinatura de e-mail - Materiais Digitais</option>
                                        <option id="digitais">Post redes sociais - Materiais Digitais</option>
                                        <option id="digitais">Cover de facebook - Materiais Digitais</option>
                                        <option id="digitais">Cover de face c/ animação - Materiais Digitais</option>
                                        <option id="digitais">GIF - Materiais Digitais</option>
                                        <option id="digitais">Anuncio banner web - Materiais Digitais</option>
                                        <option id="digitais">Banner de home site - Materiais Digitais</option>
                                        <option id="digitais">E-mmkt - Materiais Digitais</option>
                                        <option id="digitais">Stories Redes Sociais - Materiais Digitais</option>
                                        <option id="redacao">Redes Sociais - Redação</option>
                                        <option id="redacao">Conteúdo para site - Redação</option>
                                        <option id="video">Vídeo</option>
                                    </datalist>
                                </div>
                                <div class="col-md-6">
                                    <label for="anexar" style="font-size:12px;text-align:center;">Gostaria de enviar um modelo como base de layout?</label>
                                    <label style="background-color:white" name="anexar" for="file-upload" class="custom-file-upload">
                                        Anexar arquivo modelo.
                                    </label>
                                    <input type="file" id="file-upload" name="arquivos[]" multiple>
                                </div>
                            </div>
                            <?php
                            date_default_timezone_set('America/Sao_Paulo');
                            $data = date('Y-m-d H:i:s', strtotime("+15 days")); 
                            ?>
                            <input type="hidden" name="prazo" value="<?=$data;?>">
                            <div class="row pT2">
                                <div class="col-md-12">
                                    <textarea type="text" class="form-control" placeholder="Descreva o que você deseja..." name="descricao" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12" style="text-align:center">
                                <p style="list-style:none;" id="file-name">
                                </p>
                            </div>
                            <div class="row pT7 pB7">
                                <button type="submit" class="form-control col-md-4 offset-md-4">SOLICITAR</button> 
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php include 'partials/footerPainel.php'; ?>
    <?php checkSuccess(); dd($_SESSION['sucesso']); ?>
</div>
