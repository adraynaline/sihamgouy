<?php
// FONCTON ADD //
	function add_categorie($nom_categorie){
		global $connexion;
		$query = $connexion->prepare('INSERT INTO categories (Nom) VALUES (:nom_categorie)');
		$query->bindValue(':nom_categorie', $nom_categorie, PDO::PARAM_STR);
		$query->execute();
	}
	function verif_cat_exist($nom_categorie){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM categories WHERE Nom = :nom');
		$query->bindValue(':nom', $nom_categorie, PDO::PARAM_STR);
		$query->execute();
		$verif_cat_exist = $query->rowCount();
		return $verif_cat_exist;
	}

	
function show_categorie(){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM categories');
		$query->execute();
		$categorie = $query->fetchAll();
		//on retourne tous les articles selectionnés 
		
		return($categorie);
	}
function delete_cat($delete_cat){
		
		global $connexion;	
		//on envoie la requete 
		$query = $connexion->prepare('DELETE FROM categories WHERE Id = :id'); 
		$query->bindValue(':id', $delete_cat, PDO::PARAM_INT);
		//on execute la requete 

		$query->execute();	
		

	}