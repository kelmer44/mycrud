<html>
<head>
<title>User list</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>

	<table>
		<tbody>
			<tr>
				<td>Title</td>
				<td>Author</td>
				<td>Description</td>
			</tr>
		</tbody>  
        <?php
			/*
			 * foreach ( $users as $id => $user ) { echo '<tr><td><a href="index.php?book=' . $user->id . '">' . $user->name . '</a></td><td>' . $user->author . '</td><td>' . $book->description . '</td></tr>'; }
			 */
			echo "<pre>";
			print_r ( $users );
			echo "</pre>";

		?>  
    </table>

</body>
</html>


