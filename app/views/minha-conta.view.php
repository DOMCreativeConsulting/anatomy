<?php include 'partials/head.php'; ?> 
<?php include 'partials/sidebar.php'; ?>
<div id="right-panel" class="right-panel">
    <?php include 'partials/header.php'; ?>
    <div class="content">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card editarUsuarios">
                    <div class="card-body">
                        <div class="row" style="text-align:center;">
                            <div class="col-md-12">
                                <h1 class="title pB2">OLÁ <?=$_SESSION['usuario'];?></h1>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <b class="col-md-3 offset-md-2">Nome: </b> <input type="text" name="email" value="<?=$_SESSION['usuario'];?>" class="inputMinhaConta col-md-4">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <b class="col-md-3 offset-md-2">Email: </b> <input type="text" name="email" value="<?=$_SESSION['email'];?>" class="inputMinhaConta col-md-4">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <b class="col-md-3 offset-md-2">Endereço: </b> <input type="text" name="email" value="<?=$_SESSION['endereco'];?>" class="inputMinhaConta col-md-4">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <b class="col-md-3 offset-md-2">Data de Nascimento: </b> <input type="text" name="email" value="<?=$_SESSION['nascimento'];?>" class="inputMinhaConta col-md-4">
                                </div>
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
