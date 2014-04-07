$(document).ready(function(){
	$('#formConnect').on('submit', function(){
		var log = $('#log').val();
		var password = $('#password').val();

	if( log == "" || password == ""){
		alert('Des champs sont incomplets');
	} else{
		$.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(json) {
                    if(json.reponse == 'ok') { 
                        window.setTimeout("location=('?appli=admin&action=cat');");
                    } 
                    else {
                        alert('Erreur : '+ json.reponse);
                    }
                }
            });
        }
        return false;	
	});
});