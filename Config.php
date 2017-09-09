<?php


	spl_autoload_register(function($ClassName){

		$dirName = "class";
		$FilePath = $dirName . DIRECTORY_SEPARATOR . $ClassName . ".php";

		if (file_exists($FilePath)) {
			require_once ($FilePath);
		}

	});