<?php
	include_once("../application/controllers/Controller.php");
	
	define('IMGDIR', "/uploads/");
	
	$controller = new Controller();
	$controller->invoke();
?>
