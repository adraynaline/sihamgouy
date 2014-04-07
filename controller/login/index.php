<?php 

	if(isset($_POST['login']) && isset($_POST['password']))
	{	
		include_once('model/login/signin.php');
		$verif = connect($_POST['login'], $_POST['password']);
		
	
	if($verif==0)
		{
			$response = array('success' => false);
			header('Content-Type: application/json');
			echo json_encode($response);

		}
		else
		{
			if(isset($_SESSION['pseudo']))
			{
			
				$response = array('success' => true);
				header('Content-Type: application/json');
				echo json_encode($response);

				
			}
		}
	}



	include_once('view/login/index.php');

 ?>