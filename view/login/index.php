<html>
<head>
	<meta charset="utf8">
	<title>Administration</title>
	<link rel="stylesheet" type="text/css" href="../../asset/css/admin.css">
	<link rel="stylesheet" type="text/css" href="../../asset/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../asset/dist/css/bootstrap-theme.min.css">
</head>
<body>
	<?php echo md5('siham'); ?>
	<header>
		<p>Siham G Administration</p>
		<span><a href="?appli=admin&action=logout">Logout</a></span>
		<div class="clear"></div>
	</header>
<div id="main"> 
	<form role="form" id="formu_co" method="post" >
  <div class="form-group">
    <label for="exampleInputEmail1">Login</label>
    <input type="text" class="form-control" id="login" placeholder="Enter login">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div> 
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
	<script type="text/javascript" src="../../asset/jquery/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="../../asset/ajax/verif_admin.js"></script>
	<script type="text/javascript" src="../../asset/dist/js/bootstrap.min.js"></script>
</body>
</html>