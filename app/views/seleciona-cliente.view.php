<?php include 'partials/head.php'; ?> 
<?php include 'partials/sidebar.php'; ?>
<div id="right-panel" class="right-panel">
    <?php include 'partials/header.php'; ?>
    <div class="content">
    <h1 class="title"><i class="fa fa-user"></i> FILTRAR POR CLIENTE</h1>
        <div class="row pT2">

                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body" style="text-align:justify; ">
                            <div class="row">
                                <h3 class="col-md-12 title3">SELECIONE O CLIENTE</h3>
                            </div>
                            <div class="row pT2">
                                <div class="col-md-6 offset-md-3">
                                    <form action="filtrar-cliente" method="POST">
                                        <select name="cliente" class="form-control">
                                            <?php foreach($clientes as $cliente): ?>
                                                <?php if($cliente->funcionario == $_SESSION['usuario'] || $_SESSION['funcao'] == 'admin'): ?>
                                                    <option value="<?=$cliente->nome;?>"><?=$cliente->nome;?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>   
                                        <button type="submti" class="form-control pT2">Filtrar</button>                          
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
    <div class="clearfix"></div>
    <?php include 'partials/footerPainel.php'; ?>
</div>
