<?php
	include_once('model/admin/cat.php');
if(isset($_POST['nom_categorie'])){
	$verif_cat_exist = verif_cat_exist($_POST['nom_categorie']);

	if($verif_cat_exist == 0){
		add_categorie($_POST['nom_categorie']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'categorie existe deja';
	}	
}
$array['reponse'] = $reponse;
echo json_encode($array);

?>