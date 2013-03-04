<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Gestión de usuarios
</title>
</head>
<body>
<?php
	include_once("../application/controllers/Controller.php");
	
	define('IMGDIR', "/uploads/");

	$config = parse_ini_file("../application/config/config.ini", true);
	
	$controller = new Controller($config); ?>
	
	<?php 
	$controller->invoke();
?>

</body>
</html>