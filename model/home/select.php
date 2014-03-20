<?php 
	function show_cat(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM categories');
		//$query->bindValue(':fonction', 'model', PDO::PARAM_STR);
		$query->execute();
		$cat = $query->fetchAll();
		//on retourne tous les articles selectionnés 
		
		return($cat);
	}
	
 ?>