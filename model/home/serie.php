<?php 
	function show_serie($cat){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM serie WHERE Categorie_serie = :cat ORDER BY Creation DESC');
		$query->bindValue(':cat', $cat, PDO::PARAM_STR);
		$query->execute();
		$serie = $query->fetchAll();
		//on retourne tous les articles selectionnés 
		
		return($serie);


	}
	
 ?>