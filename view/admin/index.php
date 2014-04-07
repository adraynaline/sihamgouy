<html>
<head>
	<meta charset="utf8">
	<title>Administration</title>
	<link rel="stylesheet" type="text/css" href="asset/css/admin.css">
	<link rel="stylesheet" type="text/css" href="asset/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="asset/dist/css/bootstrap-theme.min.css">
</head>
<body>
	<div id="login">
		<p>Login Page</p>
		<form method="post" action="?appli=admin&action=connect_controller" id="formConnect">
			<input class="form-control" type="text" name="login" id="log" value="" placeholder="login" /><br/>
			<input class="form-control" type="password" name="password" id="password" value="" placeholder="password" /><br/>
			<button type="submit" class="btn btn-default">Connect</button>
		</form>
	</div>
	
	<script type="text/javascript" src="asset/jquery/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="asset/ajax/connect.js"></script>
	<script type="text/javascript" src="asset/dist/js/bootstrap.min.js"></script>
</body>
</html>