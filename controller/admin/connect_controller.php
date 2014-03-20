<?php 
	include_once('model/home/connect.php');
	if(isset($_POST['login']) && isset($_POST['password'])){
		$verif_co = connect($_POST['login'],$_POST['password']);
		if($verif_co == 0){
			$reponse = 'ok';
		}
		else {
			$reponse = 'erreur';
		}
	}
	$array['reponse'] = $reponse;
	echo json_encode($array);
 ?>