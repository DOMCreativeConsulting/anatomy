<?php include 'partials/head.php'; ?> 
<?php include 'partials/sidebar.php'; ?>
<div id="right-panel" class="right-panel">
    <?php include 'partials/header.php'; ?>
    <div class="content">
        <div class="row">
            <div class="col-md-5">
                <div class="card editarUsuarios">
                    <div class="card-body">
                        <h1 class="title pB2">FUNCIONÁRIOS</h1>
                        <table class="usuarios">
                            <thead>
                                <tr>
                                    <th class="usuario">Id: </th>
                                    <th class="usuario">Nome: </th>
                                    <th class="usuario">Email: </th>
                                    <th class="usuario">Função: </th>
                                    <th class="usuario"> </th>
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
                                    <td class="usuario"><?=$usuario->funcao;?></td>
                                    <td class="usuario">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <form method="post" id="deletaFuncionario<?=$usuario->id;?>" action="deletar-usuario">
                                                    <input type="hidden" name="id" value="<?=$usuario->id;?>">
                                                    <a href="javascript:{}" onclick="document.getElementById('deletaFuncionario<?=$usuario->id;?>').submit();"><i style="color:red;" class="fa fa-trash"></i></a>
                                                </form>
                                            </div>
                                            <div class="col-md-6" style="padding-right:5px">
                                                <a href="javascript:{}" class="botao-edicao" id="<?=$usuario->id;?>"><i style="color:green;" class="fa fa-edit"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="edicao" id="edicao-<?=$usuario->id;?>">
                                    <form method="post" id="alteraUsuario" action="alterar-funcionario">
                                        <td><input class="form-control" type="hidden" name="id" id="clienteId" value="<?=$usuario->id;?>"></td>
                                        <td><input class="form-control" type="text" name="nome" value="<?=$usuario->nome;?>"></td>
                                        <td><input class="form-control" type="text" name="email" value="<?=$usuario->email;?>"></td>
                                        <td>
                                            <select name="funcao" class="form-control">
                                                <option value="jornalista">Jornalista</option>
                                                <option value="designer">Designer</option>
                                                <option value="admin">Administrador</option>
                                            </select>
                                        </td>
                                        <td><button class="form-control" type="submit" class="btn">Alterar</button></td>
                                    </form>
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
            <div class="col-md-7">
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
                                    <th class="usuario"> </th>
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
                                    <td class="usuario">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <form method="post" id="deletaUsuario<?=$usuario->id;?>" action="deletar-usuario">
                                                    <input type="hidden" name="id" value="<?=$usuario->id;?>">
                                                    <a href="javascript:{}" onclick="document.getElementById('deletaUsuario<?=$usuario->id;?>').submit();"><i style="color:red;" class="fa fa-trash"></i></a>
                                                </form>
                                            </div>
                                            <div class="col-md-6" style="padding-right:5px">
                                                <a href="javascript:{}" class="botao-edicao" id="<?=$usuario->id;?>"><i style="color:green;" class="fa fa-edit"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="edicao" id="edicao-<?=$usuario->id;?>">
                                    <form method="post" id="alteraUsuario" action="alterar-usuario">
                                        <td><input class="form-control" type="hidden" name="id" id="clienteId" value="<?=$usuario->id;?>"></td>
                                        <td><input class="form-control" type="text" name="nome" value="<?=$usuario->nome;?>"></td>
                                        <td><input class="form-control" type="text" name="email" value="<?=$usuario->email;?>"></td>
                                        <td><input class="form-control" type="text" name="endereco" value="<?=$usuario->endereco;?>"></td>
                                        <td><input class="form-control" type="text" name="cpf" value="<?=$usuario->cpf;?>"></td>
                                        <td>
                                            <select name="funcionario" class="form-control">
                                                <?php foreach($usuarios as $usuario): ?>
                                                <?php if($usuario->funcao != "cliente"): ?>
                                                <option value="<?=$usuario->nome;?>"><?=$usuario->nome;?></option>
                                                <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <td><button class="form-control" type="submit" class="btn">Alterar</button></td>
                                    </form>
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
