<?php
function connect($login,$password)
{
	try
	{	
		global $connexion;
			
		$sql = $connexion->prepare('SELECT * FROM admin WHERE login = :login AND password = :password');

		$sql->bindValue(':login', $login, PDO::PARAM_STR);
		$sql->bindValue(':password', md5($password), PDO::PARAM_STR);
					
		$sql->execute();
		$verif = $sql->rowCount();
		
		$rows = $sql->fetchAll();

		
		
		foreach ($rows as $row) {
		
		session_start();
		$_SESSION["pseudo"] = $row['pseudo'];
		$_SESSION["password"] = $row['password'];
		
		return $verif;
				
		}
	}
	catch(Exception $e)
	{
		echo "La requete n'a pas marché" ,$e->getMessage();
		die();
	}
}