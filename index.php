<?php


	require_once("Config.php");

	$Conn = new Sql;
	$usuarios = $Conn->Select("SELECT * FROM tb_usuarios");
	var_dump($usuarios);