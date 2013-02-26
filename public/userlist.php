<html>
<head></head>

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
								foreach ( users as $id => $user ) {
									echo '<tr><td><a href="index.php?book=' . $user->id . '">' . $user->name . '</a></td><td>' . $user->author . '</td><td>' . $book->description . '</td></tr>';
								}
								
								?>  
    </table>

</body>
</html>


