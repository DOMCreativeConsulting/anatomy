<?php include 'partials/head.php'; ?> 
<?php include 'partials/sidebar.php'; ?>
<div id="right-panel" class="right-panel">
<?php include 'partials/header.php'; ?>

    <div class="content">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <table class="ticket ">
                            <thead>
                                <th class="ticket">#id</th>
                                <th class="ticket">Título</th>
                                <th class="ticket">Categoria</th>
                                <th class="ticket">Situação</th>
                            </thead>
                            <tbody>
                                <?php foreach($tickets as $ticket): ?>
                                <?php if($ticket->status == 'resolvido'): ?>
                                <tr>
                                    <td class="ticket"><?=$ticket->id;?></td>
                                    <td class="ticket"><?=$ticket->titulo;?></td>
                                    <td class="ticket"><?=$ticket->categoria;?></td>
                                    <td class="ticket"><?=$ticket->status;?></td>
                                </tr>
                                <?php endif; ?>
                                <?php endforeach; ?>
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
