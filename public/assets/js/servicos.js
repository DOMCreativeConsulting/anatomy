var servicoId = $('.servicoId').val();

$(document).ready(function(){

    $('.fechar').toggle();

    $('.reprovar').toggle();

    $('.enviar-novo').toggle();

    $('.toggleReprovar').click(function(){

        $('.reprovar').toggle(300);

    });

    $('.toggleEnviarNovo').click(function(){

        $('.enviar-novo').toggle(300);

    });

    $('.botaoToggle').click(function(){

        $('.fechar').toggle(300);

    });

});