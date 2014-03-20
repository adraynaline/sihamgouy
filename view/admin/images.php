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
	<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalImg">
 		 Add Img
	</button>

<!-- Modal -->
<div class="modal fade" id="myModalImg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Ajouter une image</h4>
      </div>
      <div class="modal-body">
       <form class="form-inline" role="form" method="post" action="?appli=admin&action=add_img" id="formImg">
		<div class="form-group">
          	  <input type="file" name="fileUpload1" id="fileUpload1" class="fileUpload bt vert" />
          	  <input type="hidden" id="photo" name="photo" value="">
        	  <div id="previews"></div>
		</div>
		<input type="hidden" name="img_serie" id="img_serie" value="<?php echo $serie ?>">
		<input type="hidden" id="url_redirect" value="?appli=admin&action=images&serie=<?php echo $serie;?>"> 
		<button type="submit" class="btn btn-success">
			OK
		</button>

	</form>

      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="row">
	<div class="col-md-2">
		<button type="submit" class="btn btn-default">
			<a href="?appli=admin">Categories</a>
		</button><br/><br/>
		<button type="submit" class="btn btn-warning">
			<a href="?appli=admin&action=serie">Images</a>
		</button>
	</div>
	<div class="col-md-10">
	<h1>Serie : <?php echo $serie; ?></h1>
	<br/>
	
	<table class="table table_bordered">
				<thead>
					<tr>
						<td>ID</td>
						<td>NOM</td>
						<td>DELETE</td>
						<td>UPDATE</td>
					</tr>
					
				</thead>
				<tbody>
<?php foreach($images as $image): ?>
	
				<tr>
					<td><?php echo $image['Id']; ?></td>
					<td><img width="50px" src="<?php echo $image['Nom']; ?>"/></td>
					<td><a class="delete_button" href="?appli=admin&action=images&serie=<?php echo $serie; ?>&delete_img=<?php echo $image['Id']; ?>">DELETE</a></td>
					<td><a class="update_button" href="">UPDATE</a></td>
				</tr>
	
<?php endforeach; ?>
</tbody>
 <table>

</div>
</div>
<script type="text/javascript" src="asset/jquery/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="asset/ajax/verif_admin.js"></script>
	<script type="text/javascript" src="asset/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="asset/jquery/jquery.liteuploader.min.js"></script>
	<script type="text/javascript" src="asset/jquery/upload_img.js"></script>
	<script type="text/javascript" src="asset/ajax/add_img.js"></script>
</body>
</html>


