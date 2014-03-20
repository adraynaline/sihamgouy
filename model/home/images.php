<?php 
	function show_images($serie){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM images WHERE Image_serie = :serie ');
		$query->bindValue(':serie', $serie, PDO::PARAM_STR);
		$query->execute();
		$images = $query->fetchAll();
		//on retourne tous les articles selectionnés 
		return($images);
	}
	
 ?>