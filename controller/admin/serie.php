<?php 
include_once('model/admin/serie.php');

if(isset($_GET['delete_serie'])){
	delete_serie($_GET['delete_serie']);
}
$categorie = $_GET['categorie'];
$serie = show_serie($categorie);

define('PAGE_TITLE', 'Serie');
include_once('view/layout/header.admin.php'); 
include_once('view/admin/serie.php'); 

?>