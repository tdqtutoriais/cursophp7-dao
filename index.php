<?php 

	
	require_once("Config.php");

	$sql = new sql();
	$usuarios = $sql->Select("SELECT * FROM tb_usuarios");
	var_dump($usuarios);




 ?>