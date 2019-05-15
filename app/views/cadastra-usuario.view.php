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
                                        CADASTRAR USUÁRIO
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
                                        <label for="usuario">Nome de Usuário:</label>
                                        <input type="text" name="usuario" class="form-control col-md-12" placeholder="User_Exemplo79" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="senha">Senha:</label>
                                        <input type="password" name="senha" class="form-control col-md-12" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="funcao">Função:</label>
                                        <select name="funcao" class="form-control">
                                            <option value="designer">Designer</option>
                                            <option value="jornalista">Jornalista</option>
                                            <option value="admin">Administrador</option>
                                        </select>
                                    </div>
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
<?php checkSuccess(); ?>
