$(document).ready(function(){

    $('.edicao').toggle();

    $('.botao-edicao').click(function(){

        $(`#edicao-${this.id}`).toggle(300);

    });

});