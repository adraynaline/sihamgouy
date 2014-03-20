$(document).ready(function(){
	$('#formConnect').on('submit', function(){
		var login = $('#login').val();
		var password = $('#password').val();

	if( login == "" || password == ""){
		alert('Des champs sont incomplets');
	} else{
		$.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(json) {
                    if(json.reponse == 'ok') { 
                        window.setTimeout("location=('?appli=home&action=cat');");
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