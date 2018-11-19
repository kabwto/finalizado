<?php

session_start();

    if(!$_SESSION['usuario']){
		header('Location: index.php?erro=1');
	}
	
	require_once('db.class.php');
	$id_usuario = $_SESSION['id_usuario'];

	$objDb = new db();
    $link = $objDb->conecta_mysql();
    
	$sql = " SELECT * FROM tweet ORDER BY data_inclusao DESC ";
	
	echo $sql;

    //mysqli_query($link, $sql);



?>