
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
			 foreach ( $users as $id => $user ): ?>
			 
					<tr>
						<td><?=$user->id ?></td>
						<td><a href="<?= $id ?>"><?=$user->name?></a></td>
						<td><?=$user->email?></td>
						<td><?=$user->password?></td>
						<td><?=$user->description?></td>
						<td><?=$user->address?></td>
						<td><?=$user->city?></td>
						<td><?php echo implode(", ", $user->sports) ?></td>
						<td><?php echo implode(", ", $user->pets)?></td>
						<td><?=$user->gender?></td>
						<td><img height=100 src="<?php echo IMGDIR.$user->picture ?>" /><br /><?=$user->picture?></td>
						<td><a href="update/<?= $user->id ?>">Update</a>, <a href="delete/<?= $user->id ?>">Delete</a></td>
					</tr>
			 <?php endforeach; ?>  
    </table>
    
    <a href="/create">Añadir usuario</a>


