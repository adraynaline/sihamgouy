<?php 
	
	function add_image($photo, $img_serie){
		try {
		global $connexion;
		$query = $connexion->prepare('INSERT INTO images (Nom, Image_serie) VALUES (:nom,:serie)');
		$query->bindValue(':nom', $photo, PDO::PARAM_STR);
		$query->bindValue('serie', $img_serie, PDO::PARAM_STR);
		$query->execute();
	}
			catch(Exception $e)
	{
		echo "La requete n'a pas marché" ,$e->getMessage();
		die();
	}
		
	}
	// FUNCTION SHOW 
	function show_image($serie){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM images WHERE Image_serie = :serie ');
		$query->bindValue(':serie', $serie, PDO::PARAM_STR);
		$query->execute();
		$images = $query->fetchAll();
		//on retourne tous les articles selectionnés 
		return($images);
	}
	// FUNCTION DELETE

	
	function delete_img($delete_img){
		global $connexion;
		$query = $connexion->prepare('DELETE FROM images WHERE Id = :id ');
		$query->bindValue(':id', $delete_img, PDO::PARAM_INT);
		$query->execute();
	}	
 ?>