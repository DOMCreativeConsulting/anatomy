<?php include 'partials/head.php'; ?>
    
<?php include 'partials/sidebar.php'; ?>

<div id="right-panel" class="right-panel">

<?php include 'partials/header.php'; ?>

    <div class="content loginScreen">

        <div class="col-md-12">

            <div class="card">

                <div class="card-body">

                    <form class="loginForm" style="padding:2%;" method="POST" action="cadastrar">

                        <div class="col-md-12 pT2">
                            <h2 class="loginTitle">
                                CADASTRO DE USUÁRIOS
                            </h2>
                        </div>

                        <div class="row pT7">

                            <div class="col-md-4">
                                <label for="nome">Nome: </label>
                                <input type="text" name="nome" class="form-control col-md-12" placeholder="Nome completo..." required>
                            </div>
                            <div class="col-md-4">
                                <label for="email">Email: </label>
                                <input type="email" name="email" class="form-control col-md-12" placeholder="exemplo@email.com" required>
                            </div>
                            <div class="col-md-4">
                                <label for="sexo">Sexo: </label>
                                <select class="form-control col-md-12" name="sexo">
                                    <option value="M">Masculino</option>
                                    <option value="F">Feminino</option>
                                    <option value="O">Outro</option>
                                </select>
                            </div>

                        </div>

                        <div class="row pT2">

                            <div class="col-md-4">
                                <label for="nascimento">Data de Nascimento: </label>
                                <input type="date" name="nascimento" class="form-control col-md-12" required>
                            </div>
                            <div class="col-md-4">
                                <label for="cpf">Cpf/Cnpj: </label>
                                <input type="text" name="cpf" class="form-control col-md-12" placeholder="000.000.000-00" required>
                            </div>
                            <div class="col-md-4">
                                <label for="telefone">Telefone: </label>
                                <input type="text" name="telefone" class="form-control col-md-12" placeholder="(xx)xxxxx-xxxx" required>
                            </div>

                        </div>

                        <div class="row pT2">

                            <div class="col-md-4">
                                <label for="funcao">Função: </label>
                                <select class="col-md-12 form-control" name="funcao">
                                    <option value="admin">Administrador</option>
                                    <option value="jornalista">Jornalista</option>
                                    <option value="design">Design</option>
                                    <option value="cliente">Cliente</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="funcionario">Funcionário: </label>
                                <datalist name="funcionario" class="form-control">
                                    <?php foreach ($funcionarios as $funcionario): ?>
                                    <option value="<?=$funcionario->nome;?>"><?=$funcionario->nome;?> (<?=$funcionario->funcao;?>)</option>
                                    <?php endforeach; ?>
                                </datalist>
                            </div>
                            <div class="col-md-4">
                                <label for="campo">Campo: </label>
                                <input type="text" name="campo" class="form-control col-md-12" required>
                            </div>

                        </div>
                        
                        <div class="row pT2">

                            <div class="col-md-4">
                                <label for="usuario">Nome de Usuário: </label>
                                <input type="text" name="usuario" class="form-control col-md-12" placeholder="Exemplo_79" required>
                            </div>
                            <div class="col-md-4">
                                <label for="senha">Senha: </label>
                                <input type="password" name="senha" class="form-control col-md-12" required>
                            </div>
                            <div class="col-md-4">
                                <label for="senha2">Repita a Senha: </label>
                                <input type="password" name="senha2" class="form-control col-md-12" required>
                            </div>

                        </div>

                        <div class="row pB2 pT7">

                            <div class="col-md-4">
                                
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="col-md-12 form-control">Cadastrar</button>
                            </div>
                            <div class="col-md-4 pT2">
                                
                            </div>

                        </div>

                    </form>
                
                </div>
            
            </div>

        </div>

    </div>
                                
<div class="clearfix"></div>

<?php include 'partials/footerPainel.php'; ?>
