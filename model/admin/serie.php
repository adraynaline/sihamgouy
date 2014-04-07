<?php
function verif_serie_exist($nom_serie){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM serie WHERE Nom = :nom');
		$query->bindValue(':nom', $nom_serie, PDO::PARAM_STR);
		$query->execute();
		$verif_serie_exist = $query->rowCount();
		return $verif_serie_exist;
	}
function add_serie($nom_serie, $url_serie, $categorie_serie, $image_serie){
		try{
			global $connexion;
			
			$query = $connexion->prepare('INSERT INTO serie (Nom, Categorie_serie, Url, Illustration) VALUES (:nom_serie, :categorie_serie, :url_serie, :image_serie )');
			$query->bindValue(':nom_serie', $nom_serie, PDO::PARAM_STR);
			$query->bindValue(':categorie_serie', $categorie_serie, PDO::PARAM_STR);
			$query->bindValue(':url_serie', $url_serie, PDO::PARAM_STR);
			$query->bindValue(':image_serie', $image_serie, PDO::PARAM_STR);
			
			$query->execute();
			}
			catch(Exception $e)
	{
		echo "La requete n'a pas marché" ,$e->getMessage();
		die();
	}
		
	}
function delete_serie($delete_serie){
		global $connexion;
		$query = $connexion->prepare('DELETE FROM serie WHERE Url = :id ');
		$query->bindValue(':id', $delete_serie, PDO::PARAM_INT);
		$query->execute();
	}
function delete_img_serie($delete_serie){
		global $connexion;
		$query = $connexion->prepare('DELETE FROM images WHERE Image_serie = :id ');
		$query->bindValue(':id', $delete_serie, PDO::PARAM_INT);
		$query->execute();
	}
function show_serie($categorie){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM serie WHERE Categorie_serie = :categorie ');
		$query->bindValue(':categorie', $categorie, PDO::PARAM_STR);
		$query->execute();
		$serie = $query->fetchAll();
		//on retourne tous les articles selectionnés 
		return($serie);
	}