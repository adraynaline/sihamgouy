<html>
<head>
	<meta charset="utf8">
	<title>Administration</title>
	<link rel="stylesheet" type="text/css" href="asset/css/admin.css">
	<link rel="stylesheet" type="text/css" href="asset/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="asset/dist/css/bootstrap-theme.min.css">
</head>
<body>
	<header>
		<p>Siham G Administration</p>
		<span><a href="?appli=admin&action=logout">Logout</a></span>
		<div class="clear"></div>
	</header>
<div class="row">
	<div class="col-md-2">
		<button type="submit" class="btn btn-warning">
			<a href="?appli=admin">Categories</a>
		</button><br/><br/>
		
	</div>
	<div class="col-md-10">
		<form class="form-inline" role="form" method="post" action="?appli=admin&action=add_cat" id="formCat">
			<div class="form-group">		
				<input type="text" name="nom_categorie" class="form-control" id="nom" placeholder="Nom Categorie">
			</div>
			<button type="submit" class="btn btn-success">
				OK
			</button>

		</form>


		<table class="table table_bordered">
			<thead>
				<tr>
					<td><button class="btn btn-info">ID</button></td>
					<td><button class="btn btn-info">NOM</button></td>
					<td><button class="btn btn-info">DELETE</button></td>
					<td><button class="btn btn-info">UPDATE</button></td>
				</tr>	
			</thead>
			<tbody>
	<?php foreach($categories as $categorie): ?>
		
				<tr>
					<td><?php echo $categorie['Id']; ?></td>
					<td><a href="?appli=admin&action=serie&categorie=<?php echo $categorie['Nom']; ?>"><?php echo $categorie['Nom']; ?></a></td>
					<td><a class="delete_button" href="?appli=admin&action=index&delete_cat=<?php echo $categorie['Id']; ?>">DELETE</a></td>
					<td><a class="update_button" href="">UPDATE</a></td>
				</tr>	
	<?php endforeach; ?>
			</tbody>
		<table>
	</div>
</div>
	<script type="text/javascript" src="asset/jquery/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="asset/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="asset/ajax/submit_cat.js"></script>

</body>
</html>

