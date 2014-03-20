<?php 
	// On Inclut le modele
	include_once('model/admin/cat.php');
	// Controlleur pour suppression d'une catégorie
	if(isset($_GET['delete_cat'])){
		delete_cat($_GET['delete_cat']);
	}
	
	/* MISE EN PLACE FONCTION */
	
	$categories = show_categorie();

	/* */

	// Include la vue
	include_once('view/admin/categorie.php');
 ?>