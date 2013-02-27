<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Form
</title>
</head>
<body>
<?php
	include_once("../application/controllers/Controller.php");
	
	define('IMGDIR', "/uploads/");

	$config = parse_ini_file("../application/config/config.ini", true);
	$filename = $config['production']['usersFilename'];
	
	$controller = new Controller($filename);
	$controller->invoke();
?>

</body>
</html>