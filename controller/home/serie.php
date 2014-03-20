<?php 
	include_once('model/home/serie.php');
	//$categorie = $_GET['categorie'];
	define("PAGE_TITLE", "Serie");
	define("PAGE_CSS", "serie");

	$cat = $_GET['categorie'];
	$serie = show_serie($cat);
	
	include_once('view/layout/header.home.php');
	include_once('view/home/serie.php');
	include_once('view/layout/footer.home.php');
	 ?>