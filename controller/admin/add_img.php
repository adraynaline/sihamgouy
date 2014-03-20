<?php
	include_once('model/admin/index.php');
	if(isset($_POST['photo'])){
		add_image($_POST['photo'],$_POST['img_serie']);
		$reponse = 'ok';
	}
	else {
		$reponse = 'Erreur somewhere';
	}	

$array['reponse'] = $reponse;
echo json_encode($array);

?>