<?php 
	include_once('model/home/select.php');
	
	$cat = show_cat();
	$imageshome = show_images();
	
	define("PAGE_TITLE", "Bienvenue");
	define("PAGE_CSS", "home");


	include_once('view/layout/header.home.php');
	include_once('view/home/home.php');
	include_once('view/layout/footer.home.php');
 ?>