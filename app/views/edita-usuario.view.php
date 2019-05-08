<?php include 'partials/head.php'; ?> 
<?php include 'partials/sidebar.php'; ?>
<div id="right-panel" class="right-panel">
    <?php include 'partials/header.php'; ?>
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card editarUsuarios">
                    <div class="card-body">
                        <h1 class="title pB2">FUNCIONÁRIOS</h1>
                        <table class="usuarios">
                            <thead>
                                <tr>
                                    <th class="usuario">Id: </th>
                                    <th class="usuario">Nome: </th>
                                    <th class="usuario">Email: </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($usuarios as $usuario):
                                    if($usuario->funcao != 'cliente'):
                                ?>
                                <tr>
                                    <td class="usuario">#<?=$usuario->id;?></td>
                                    <td class="usuario"><?=$usuario->nome;?></td>
                                    <td class="usuario"><?=$usuario->email;?></td>
                                </tr>
                                <?php 
                                    endif;
                                endforeach; 
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card editarUsuarios">
                    <div class="card-body">
                        <h1 class="title pB2">CLIENTES</h1>
                        <table class="usuarios">
                            <thead>
                                <tr>
                                    <th class="usuario">Id: </th>
                                    <th class="usuario">Nome: </th>
                                    <th class="usuario">Email: </th>
                                    <th class="usuario">Endereço: </th>
                                    <th class="usuario">Cpf: </th>
                                    <th class="usuario">Funcionário: </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($usuarios as $usuario):
                                    if($usuario->funcao == 'cliente'):
                                ?>
                                <tr>
                                    <td class="usuario">#<?=$usuario->id;?></td>
                                    <td class="usuario"><?=$usuario->nome;?></td>
                                    <td class="usuario"><?=$usuario->email;?></td>
                                    <td class="usuario"><?=$usuario->endereco;?></td>
                                    <td class="usuario"><?=$usuario->cpf;?></td>
                                    <td class="usuario"><?=$usuario->funcionario;?></td>
                                </tr>
                                <?php 
                                    endif;
                                endforeach; 
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php include 'partials/footerPainel.php'; ?>
</div>
