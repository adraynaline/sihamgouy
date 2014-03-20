<?php
function connect($login, $password){
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM admin WHERE login = :login AND password = :password');
		$query->bindValue(':login', $login, PDO::PARAM_STR);
		$query->bindValue(':password', $password, PDO::PARAM_STR);
		$query->execute();
		$verif_co = $query->rowCount();

		return $verif_co;
	}