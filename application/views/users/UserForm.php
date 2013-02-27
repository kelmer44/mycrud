
<?php if(!isset($user)){ 
	$user = new User();
	$user->sports = array();
	$user->pets = array();
}
?>
	<form action="/save" method="POST" enctype="multipart/form-data">
		<ul>
		<input type="hidden" name="action" value="save"/>
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
					<option value="football" <?php if(in_array("football", $user->sports, true)) echo "selected=\"selected\""; ?>>Football</option>
					<option value="tennis" <?php if(in_array("tennis", $user->sports, true)) echo "selected=\"selected\""; ?>>Tennis</option>
					<option value="golf" <?php if(in_array("golf", $user->sports, true)) echo "selected=\"selected\""; ?>>Golf</option>
					<option value="chess" <?php if(in_array("chess", $user->sports, true)) echo "selected=\"selected\""; ?>>Chess</option>
			</select></li>

			<li>Pets: 
				<input type="checkbox" name="pets[]" value="Dog" <?php if(in_array("Dog", $user->pets, true)) echo "checked=\"checked\""; ?>/> Dog 
				<input	type="checkbox" name="pets[]" value="Cat" <?php if(in_array("Cat", $user->pets, true)) echo "checked=\"checked\""; ?>/> Cat 
				<input type="checkbox"	name="pets[]" value="Monkey" <?php if(in_array("Monkey", $user->pets, true)) echo "checked=\"checked\""; ?>/> Monkey
			</li>

			<li>Gender: 
				<input type="radio" name="gender" value="Man" <?php if($user->gender === "Man") echo "checked=\"checked\""; ?>/> M <input
				type="radio" name="gender" value="Woman" <?php if($user->gender === "Woman") echo "checked=\"checked\""; ?>/> F <input type="radio"
				name="gender" value="Other"  <?php if($user->gender === "Other") echo "checked=\"checked\""; ?>/> O
			</li>


			<li>Pic:<img height=100 src="<? echo IMGDIR.$user->picture ?>" /><input type="file" name="picture" size="40"></li>


			<li><input type="submit" value="Submit" /></li>
			<li><input type="reset" value="Reset" /></li>



		</ul>


	</form>