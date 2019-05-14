var fileName = [];

$(document).ready(function(){

    $('input[type="file"]').change(function(e){

        fileName = [];

        for (let index = 0; index < e.target.files.length; index++) {
            fileName.push(e.target.files[index].name + '<br>');
        }

        $('#file-name').html('Os arquivos:<br><b>' + fileName + '</b>foram selecionados!');
       
    });
    
});