<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Form
</title>
</head>
<body>
<?php if(!isset($user)) $user = new User();
?>
	<form action="procesar.php" method="POST" enctype="multipart/form-data">
		<ul>
			<li><input type="hidden" name="id" value="<?= $user->id ?>"></input></li>

			<li>First name: <input type="text" name="name" value="<?= $user->name ?>"/>
			</li>
			<li>E-mail:<input type="text" name="email" value="<?= $user->email ?>"/><li/>
			</li>

			<li>Password:<input type="password" name="password" value="<?= $user->password ?>"/></li>


			<li>Description:<textarea name="description" rows="6" cols="20" ><?= $user->description ?></textarea></li>


			<li>Address:<input type="text" name="address" value="<?= $user->address ?>"/></li>



			<li>City: <select name="city">
					<option value="santiago" <?php if($user->city === "santiago") echo "selected=\"selected\""; ?>>Santiago</option>
					<option value="coruna" <?php if($user->city === "coruna") echo "selected=\"selected\""; ?>>A Coruña</option>
					<option value="vigo" <?php if($user->city === "vigo") echo "selected=\"selected\""; ?>>Vigo</option>
					<option value="ourense" <?php if($user->city == "ourense") echo "selected=\"selected\""; ?>>Ourense</option>
			</select>
			</li>




			<li>Sports: <select name="sports[]" multiple="true">
					<option value="football">Football</option>
					<option value="tennis">Tennis</option>
					<option value="golf">Golf</option>
					<option value="chess">Chess</option>
			</select></li>

			<li>Pets: 
				<input type="checkbox" name="pets[]" value="Dog" /> Dog 
				<input	type="checkbox" name="pets[]" value="Cat" /> Cat 
				<input type="checkbox"	name="pets[]" value="Monkey" /> Monkey
			</li>

			<li>Gender: <input type="radio" name="gender" value="Man" <?php if($user->gender === "M") echo "checked=\"checked\""; ?>/> M <input
				type="radio" name="gender" value="Woman" <?php if($user->gender === "F") echo "checked=\"checked\""; ?>/> F <input type="radio"
				name="gender" value="Other" <?php if($user->gender === "O") echo "checked=\"checked\""; ?>/> O
			</li>


			<li>Pic:<img src="<? echo IMGDIR.$user->picture ?>" /><input type="file" name="picture" size="40"></li>


			<li><input type="submit" value="Submit" /></li>
			<li><input type="reset" value="Reset" /></li>



		</ul>


	</form>
</body>
</html>