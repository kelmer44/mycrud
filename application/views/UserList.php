<html>
<head>
<title>User list</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
	<h3>Lista de usuarios</h3>
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
			
			 foreach ( $users as $id => $user ) { 
					echo "<tr>";
						echo "<td>".$id."</td>";
						echo "<td><a href=\"?id=".$id."\">".$user->name."</a></td>";
						echo "<td>".$user->email."</td>";
						echo "<td>".$user->password."</td>";
						echo "<td>".$user->description."</td>";
						echo "<td>".$user->address."</td>";
						echo "<td>".$user->city."</td>";
						echo "<td>".$user->sports."</td>";
						echo "<td>".$user->pets."</td>";
						echo "<td>".$user->gender."</td>";
						echo "<td>".$user->picture."</td>";
						echo "<td><a href=\"\">Update</a>, <a href=\"\">Delete</a></td>";
					echo "</tr>";
			 }
		?>  
    </table>
    
    <a href="">Añadir usuario</a>

</body>
</html>


