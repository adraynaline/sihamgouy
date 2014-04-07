<?php 

	
	include_once('model/admin/index.php');
	if(isset($_POST['image_serie'])){
		add_image($_POST['image_serie'], $_FILES['image']);
	}

	if(isset($_GET['delete_img'])){
		delete_img($_GET['delete_img']);
	}

	$serie = $_GET['serie'];
	$images = show_image($serie);
	
	include_once('view/admin/images.php');

 ?>