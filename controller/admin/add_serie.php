<?php
	include_once('model/admin/serie.php');
	if(isset($_POST['nom_serie'])){
		$verif_serie_exist = verif_serie_exist($_POST['nom_serie']);

		if($verif_serie_exist == 0){
		add_serie($_POST['nom_serie'], $_POST['url_serie'],$_POST['categorie_serie'], $_POST['image_serie']);
		$reponse = 'ok';
		}
		else {
			$reponse = 'serie existe deja';
		}	
}
$array['reponse'] = $reponse;
		echo json_encode($array);