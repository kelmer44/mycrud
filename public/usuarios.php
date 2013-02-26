
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>User list</title>
</head>

</html>
<body>

	<table border="1">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>E-mail</th>
			<th>Password</th>
			<th>Description</th>
			<th>Address</th>
			<th>City</th>
			<th>Sports</th>
			<th>Pets</th>
			<th>Gender</th>
			<th>Picture</th>
			<th>Options</th>

		</tr>
<?php


include_once("..\application\models\User.php");


$lines = file ( "usuarios.txt" );
foreach ( $lines as $line_num => $line ) {
	echo "<tr>";
	$attributes = explode ( "|", $line );
	$user = new User();
	foreach ( $attributes as $clave => $valor ) {
		echo "<td>";
		echo $valor;
		echo "</td>";
	}
	echo "<td> <a href=\"\">Update</a>, <a href=\"\">delete</a> </td>";
	
	
	echo "</tr>";
}


?>
</table>
</body>