<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Form
</title>
</head>
<body>
	<form action="procesar.php" method="POST" enctype="multipart/form-data">
		<ul>
			<li><input type="hidden" name="id" value="1"></input></li>

			<li>First name: <input type="text" name="name" />
			</li>
			<li>E-mail:<input type="text" name="email" />
			</li>

			<li>Password:<input type="password" name="password" /></li>


			<li>Description:<textarea name="description" rows="6" cols="20"></textarea></li>


			<li>Address:<input type="text" name="address" /></li>



			<li>City: <select name="city">
					<option value="santiago">Santiago</option>
					<option value="coruna">A Coruña</option>
					<option value="vigo">Vigo</option>
					<option value="ourense">Ourense</option>
			</select>
			</li>




			<li>Sports: <select name="sports[]" multiple="true">
					<option value="football">Football</option>
					<option value="tennis">Tennis</option>
					<option value="golf">Golf</option>
					<option value="chess">Chess</option>
			</select></li>

			<li>Pets: <input type="checkbox" name="pets[]" value="Dog" /> Dog <input
				type="checkbox" name="pets[]" value="Cat" /> Cat <input type="checkbox"
				name="pets[]" value="Monkey" /> Monkey
			</li>

			<li>Gender: <input type="radio" name="gender" value="Man" /> M <input
				type="radio" name="gender" value="Woman" /> F <input type="radio"
				name="gender" value="Other" /> O
			</li>


			<li>Pic:<input type="file" name="picture" size="40"></li>


			<li><input type="submit" value="Submit" /></li>
			<li><input type="button" value="Button" /></li>
			<li><input type="reset" value="Reset" /></li>



		</ul>


	</form>
</body>
</html>