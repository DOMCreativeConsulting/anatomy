<?php include 'partials/head.php'; ?>
    
<?php include 'partials/sidebar.php'; ?>

    <div id="right-panel" class="right-panel">

        <?php include 'partials/header.php'; ?>

        <div class="content">

            <h1 style="text-align:center;">SOU 
            <?php

            echo $_SESSION['user'];

            ?>
            !</h1>
            
        </div>

        <div class="clearfix"></div>

        <?php include 'partials/footer.php'; ?>
