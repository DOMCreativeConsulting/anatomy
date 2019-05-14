var fileName = [];

$(document).ready(function(){

    function filePreview(input) {

        for(var i = 0; i < input.files.length; i++){

            if (input.files && input.files[i]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#uploadForm').after('<embed class="miniatura" src="'+e.target.result+'">');
                }
                reader.readAsDataURL(input.files[i]);
            }

        }

    }

    $("#file-upload").change(function () {
        /*for(var i = 0; i < input.files.length; i++){
            $('#uploadForm + embed').remove();a
        }*/
        filePreview(this);
    });

});