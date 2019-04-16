<?php
	try {
		$var = new PDO("mysql:host=localhost;dbname=prova_bd","root","");
		//echo "Conectado";
	} catch (PDOException $e) {
		echo $e -> getMessage();
	}
?>