<?php 
	include_once('model/login/index.php');
	if(isset($_POST['login']) && isset($_POST['password'])){
		$verif_co = connect($_POST['login'],$_POST['password']);
		if($verif_co === 0){
			$reponse = 'erreur';
		}
		else {
			$reponse = 'ok';
		}
	}
	else {
		$reponse = 'erreur';
	}
	$array['reponse'] = $reponse;
	echo json_encode($array);
 ?>