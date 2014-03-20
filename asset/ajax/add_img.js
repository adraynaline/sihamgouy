$(document).ready(function(){
	$('#formImg').on('submit', function(){
		var img = $('#photo').val();
		var serie = $('#img_serie').val();
		var redirect = $('#url_redirect').val();
	
	if(img == "" || serie == ""){
		alert('Des champs sont incomplets');
	} else{
		$.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(json) {
                    if(json.reponse == 'ok') { 
                        alert('Image ajoutée.');
                        window.setTimeout("location=('"+redirect+"');");
                    } else {
                        alert('Erreur : '+ json.reponse);
                    }
                }
            });
        }
        return false;
		
	});
});