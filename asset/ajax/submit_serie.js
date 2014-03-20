$(document).ready(function(){
	 $('#formSerie').on('submit', function() {
	var nom = $('#nom').val();
	var url = $('#url').val();
	var categorie = $('#categorie').val();
	var image = $('#image_input').val();
	var redirection = $('#url_redirect').val();
	if(nom == '' || url == '' || categorie == '' || image == '') {
            alert('Les champs doivent êtres remplis');
        } else {
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(json) {
                    if(json.reponse == 'ok') { 
                        alert('Serie Ajoutée avec Success');
                        window.setTimeout("location=('"+redirection+"');",1000);
                    } else {
                        alert('Erreur : '+ json.reponse);
                    }
                }
            });
        }
        return false;
	});
});