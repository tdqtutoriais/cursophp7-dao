<?php
	
	spl_autoload_register(function($ClassName){

		$FileName = "class" . DIRECTORY_SEPARATOR . $ClassName . ".class.php";

		if (file_exists($FileName)) {
			require_once($FileName);
		}else{
			echo "Não foi possivel incluir o arquivo {$ClassName}.class.php";
		}

	});