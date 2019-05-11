<?php include 'partials/head.php'; ?>

<div class="content loginScreen">

    <div class="row">

        <div class="col-xs-6 col-lg-8 loginIMG" style="background-image:url('public/assets/img/loginBackground.jpg'); background-size:cover; height:100vh;"></div>

        <div class="col-xs-6 col-lg-4 loginCanvas">

            <form class="loginForm" method="POST" action="login">

                <div class="col-md-12" style="text-align:center">
                    <img width="200px" src="public/assets/img/anatomy.png">
                </div>

                <div class="row pT5">

                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <input type="text" name="usuario" class="form-control col-md-12" placeholder="Usuário" required>
                    </div>
                    <div class="col-md-2"></div>

                </div>

                <div class="row">

                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <input type="password" name="senha" class="form-control col-md-12 mT2" placeholder="Senha" required>
                    </div>
                    <div class="col-md-2"></div>

                </div>
                
                <div class="row pB7">

                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <button class="form-control col-md-12 mT2" type="submit">Entrar</button>
                    </div>
                    <div class="col-md-2"></div>

                </div>

            </form>

        </div>


    </div>

</div>
    
