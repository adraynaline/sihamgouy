<?php 
	include_once('model/home/images.php');
	$serie = $_GET['serie'];
	$images = show_images($serie);


	define('PAGE_TITLE', $serie);
	define('PAGE_CSS', 'serie');

	include_once('view/layout/header.home.php');
	include_once('view/home/images.php');
	include_once('view/layout/footer.home.php');
 ?>
 