
<h3>Detalle de usuario <?= $id; ?></h3>
<table>
	<tr>
		<th>Id</th>
		<td><?=$user->id?></td>
	</tr>
	<tr>
		<th>Nombre</th>
		<td><?=$user->name?></td>
	</tr>
	<tr>
		<th>E-mail</th>
		<td><?=$user->email?></td>
	</tr>
	<tr>
		<th>Password</th>
		<td><?=$user->password?></td>
	</tr>
	<tr>
		<th>Description</th>
		<td><?=$user->description?></td>
	</tr>
	<tr>
		<th>Address</th>
		<td><?=$user->address?></td>
	</tr>
	<tr>
		<th>City</th>
		<td><?=$user->city?></td>
	</tr>
	<tr>
		<th>Sports</th>
		<td><?=implode(", ", $user->sports)?></td>
	</tr>
	<tr>
		<th>Pets</th>
		<td><?=implode(", ", $user->pets)?></td>
	</tr>
	<tr>
		<th>Gender</th>
		<td><?=$user->gender?></td>
	</tr>
	<tr>
		<th>Picture</th>
		<td><?=$user->picture?></td>
	</tr>
</table>
