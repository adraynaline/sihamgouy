
	
	<header>
		<p>Siham G Administration</p>
		<span><a href="?appli=admin&action=logout">Logout</a></span>
		<div class="clear"></div>
	</header>
<div class="container">
		<!-- Button trigger modal -->
		<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
		 Ajouter une serie
		</button><br/>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title" id="myModalLabel">Ajouter une serie</h4>
		      </div>
		      <div class="modal-body">
		      	<p>1/ Upload the image</p>
		        <form action="model/admin/processupload.php" method="post" enctype="multipart/form-data" id="MyUploadForm">
					<input name="ImageFile" id="imageInput" type="file" />
					<input type="submit" class="btn btn-success" id="submit-btn" value="Upload" />
					<!--<img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>-->
				</form>
				
			<br/>
				<p>Complete the form and add your serie</p>
			<form id="formSerie" class="form-inline" role="form" method="post" action="?appli=admin&action=add_serie">
				<input type="hidden" id="url_redirect" value="?appli=admin&action=serie&categorie=<?php echo $_GET['categorie'];?>">
				<div class="form-group">		
					<input type="text" name="nom_serie" class="form-control" id="nom" placeholder="Nom" >
				</div><br/>
				<div class="form-group">	
					<input type="text" name="url_serie" class="form-control" id="url" placeholder="Url">
				</div><br/>
				<!--<div class="form-group">
					<select name="categorie_serie" class="form-control">
					<?php foreach($categories as $categorie): ?>
						<option ><?php echo $categorie['Nom']; ?></option>
					<?php endforeach; ?>
					</select>
				</div><br/>-->
				<div id="output"></div>
				<input type="hidden" name="categorie_serie" id="categorie" value="<?php echo $_GET['categorie']; ?>">
				<input type="hidden" name="image_serie" id="image_input" value="">
				<button type="submit" class="btn btn-default">
					OK
				</button>

			</form>
		    
		     </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	<br/>
<div class="row">
	<div class="col-md-2">
				<button type="submit" class="btn btn-default">
					<a href="?appli=admin">Categories</a>
				</button><br/><br/>
				<button type="submit" class="btn btn-warning">
					Series
				</button><br/><br/>
			</div>
	<?php if($_GET['categorie']){ ?>
	<table class="table table_bordered">
				<thead>
					<tr>
						<td>ID</td>
						<td>NOM</td>
						<td>Illustration</td>
						<td>DELETE</td>
						<td>UPDATE</td>
					</tr>
					
				</thead>
				<tbody>
<?php foreach($serie as $serie): ?>
	
				<tr>
					<td><?php echo $serie['Id']; ?></td>
					<td><a href="?appli=admin&action=images&serie=<?php echo $serie['Url']; ?>"><?php echo $serie['Nom']; ?></a></td>
					<td><img height="100px" src="<?php echo $serie['Illustration']; ?>"></td>
					<td><a class="delete_button" href="?appli=admin&action=serie&categorie=<?php echo $serie['Categorie_serie'] ?>&delete_serie=<?php echo $serie['Id']; ?>">DELETE</a></td>
					<td><a class="update_button" href="">UPDATE</a></td>
				</tr>
	
<?php endforeach; ?>
</tbody>
 <table>
 	<?php } ?>

</div>
</div>
	<script type="text/javascript" src="asset/jquery/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="asset/ajax/verif_admin.js"></script>
	<script type="text/javascript" src="asset/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="asset/jquery/jquery.form.min.js"></script>
	<script type="text/javascript" src="asset/jquery/resize.js"></script>
	<script type="text/javascript" src="asset/ajax/submit_serie.js"></script>
</body>
</html>