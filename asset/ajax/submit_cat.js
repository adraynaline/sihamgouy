$(document).ready(function(){
	 $('#formCat').on('submit', function() {
	var nom = $('#nom').val();
	if(nom == '') {
            alert('Les champs doivent êtres remplis');
        } else {
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(json) {
                    if(json.reponse == 'ok') { 
                        alert('Categorie Ajoutée avec Success');
                        window.setTimeout("location=('?appli=admin');");
                    } else {
                        alert('Erreur : '+ json.reponse);
                    }
                }
            });
        }
        return false;
	});
});