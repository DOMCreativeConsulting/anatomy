$(document).ready(function(){

    $('#toggle').toggle();
    $('#reprovar').hide();
    $('#enviar-novo').hide();

    $('#toggleReprovar').click(function(){

        $('#reprovar').toggle(300);

    });

    $('#toggleEnviarNovo').click(function(){

        $('#enviar-novo').toggle(300);

    });

    $('#botaoToggle').click(function(){

        $('#toggle').toggle(300);

    });

});