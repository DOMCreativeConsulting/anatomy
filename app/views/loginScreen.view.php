<?php include 'partials/head.php'; ?>

<div class="content loginScreen">

    <div class="row">

        <div class="col-md-3"></div>

        <div class="col-md-6 loginCanvas">

            <form class="loginForm" method="POST" action="login">

                <div class="col-md-12">
                    <h2 class="loginTitle">
                        LOGIN
                    </h2>
                </div>

                <div class="row pT10">

                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <input type="text" name="usuario" class="lala col-md-12" placeholder="Usuário" required>
                    </div>
                    <div class="col-md-4"></div>

                </div>

                <div class="row">

                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <input type="text" name="senha" class="lala col-md-12 mT2" placeholder="Senha" required>
                    </div>
                    <div class="col-md-4"></div>

                </div>
                
                <div class="row pB7">

                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <button class="loginButton col-md-12 mT2" type="submit">Entrar</button>
                    </div>
                    <div class="col-md-4"></div>

                </div>

            </form>

        </div>

        <div class="col-md-3"></div>

    </div>

<?php include 'partials/footer.php'; ?>

</div>
    
