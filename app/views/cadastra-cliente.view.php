<?php include 'partials/head.php'; ?>
    
<?php include 'partials/sidebar.php'; ?>

    <div id="right-panel" class="right-panel">

        <?php include 'partials/header.php'; ?>

        <div class="content">

            <div class="col-md-12">
                <div class="card signUpForm">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <form method="POST" action="cadastrar">
                                <div class="col-md-12">
                                    <h2 class="loginTitle">
                                        CADASTRAR CLIENTE
                                    </h2>
                                </div>

                                <div class="row pT10">
                                    <div class="col-md-4">
                                        <label for="nome">Nome:</label>
                                        <input type="text" name="nome" class="form-control col-md-12" placeholder="Nome completo..." required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" class="form-control col-md-12" placeholder="exemplo@email.com" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="sexo">Sexo:</label>
                                        <select name="sexo" class="form-control col-md-12">
                                            <option value="M">Masculino</option>
                                            <option value="F">Feminino</option>
                                            <option value="O">Outro</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row pT2">
                                    <div class="col-md-4">
                                        <label for="nascimento">Data de Nascimento:</label>
                                        <input type="date" name="nascimento" class="form-control col-md-12" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="funcionario">Funcionário:</label>
                                        <input class="form-control" list="funcionarios" name="funcionario">
                                        <datalist id="funcionarios">
                                            <?php foreach ($funcionarios as $funcionario): ?>
                                            <option value="<?=$funcionario->nome;?>"><?=$funcionario->nome;?> (<?=$funcionario->funcao;?>)</option>
                                            <?php endforeach; ?>
                                        </datalist>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="cep">Cep:</label>
                                        <input type="text" name="cep" class="form-control col-md-12" required>
                                    </div>
                                </div>

                                <div class="row pT2">
                                    <div class="col-md-4">
                                        <label for="telefone">Telefone:</label>
                                        <input type="text" name="telefone" class="form-control col-md-12" placeholder="(00)00000-0000" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="cpf">Cpf:</label>
                                        <input type="text" name="cpf" class="form-control col-md-12" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="endereco">Endereço:</label>
                                        <input type="text" name="endereco" class="form-control col-md-12" required>
                                    </div>
                                </div>

                                <div class="row pT2">
                                    <div class="col-md-4">
                                        <label for="usuario">Nome de Usuário:</label>
                                        <input type="text" name="usuario" class="form-control col-md-12" placeholder="User_Exemplo79" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="senha">Senha:</label>
                                        <input type="password" name="senha" class="form-control col-md-12" required>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>

                                <div class="row pB7 pT7">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <button class="form-control col-md-12 mT2" type="submit">CADASTRAR</button>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    <div class="clearfix"></div>

<?php include 'partials/footerPainel.php'; ?>
