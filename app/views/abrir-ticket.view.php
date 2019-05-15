<?php include 'partials/head.php'; ?> 
<?php include 'partials/sidebarCliente.php'; ?>
<div id="right-panel" class="right-panel">
<?php include 'partials/headerCliente.php'; ?>

    <div class="content">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h1 class="title"><i style="color:grey;" class="fa fa-envelope"></i> ABRIR TICKET</h1>
                        <form method="POST" action="abrir-ticket">
                            <div class="row">
                                <div class="col-md-6 pT2">
                                    <label for="titulo">Título: </label>
                                    <input type="text" class="form-control" name="titulo" required>
                                </div>
                                <div class="col-md-6 pT2">
                                    <label for="categoria">Categoria: </label>
                                    <select name="categoria" class="form-control" required>
                                        <option value="outro">Outro</option>
                                        <option value="atendimento">Atendimento</option>
                                        <option value="duvida">Dúvida</option>
                                        <option value="produto">Produto</option>
                                        <option value="conta">Conta</option>
                                        <option value="financeiro">Financeiro</option>
                                        <option value="suporte">Suporte</option>
                                    </select>
                                </div>
                                <div class="col-md-12 pT2">
                                    <label for="mensagem">Mensagem: </label>
                                    <textarea class="form-control col-md-12" name="mensagem" required></textarea>
                                </div>
                                <div class="col-md-12 pT7">
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
