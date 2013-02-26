<?php
	include_once("../application/controllers/Controller.php");
	
	define('IMGDIR', "/uploads/");

	$config = parse_ini_file("../application/config/config.ini", true);
	$filename = $config['production']['usersFilename'];
	
	$controller = new Controller($filename);
	$controller->invoke();
?>
