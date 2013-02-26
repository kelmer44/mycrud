<?php

include_once('User.php');

class UserDao {
	public static $filename = "usuarios.txt";
	
	private $file;
	private $lines;
	
	private $userList = array();
	
	
	public function __construct(){
		
		$this->lines = file ( self::$filename );
		$i = 0;
		foreach ($this->lines as $line_num => $line ) {
			
			$attributes = explode ( "|", $line );
			//$user = new User();
			$user = new User();
			
			$user->id = $attributes[0];
			$user->name = $attributes[1];
			$user->email = $attributes[2];
			$user->password = $attributes[3];
			$user->description = $attributes[4];
			$user->address = $attributes[5];
			$user->city = $attributes[6];
			$user->sports = explode(",", $attributes[7]);
			
			
			$user->pets = explode(",", $attributes[8]);
			$user->gender = $attributes[9];
			$user->picture = $attributes[10];
			
			/*foreach ( $attributes as $clave => $valor ) {
				echo $clave.$valor;
				echo "<br />";
			}*/
			$this->userList[$user->id] = $user;
		}
		
		
		/*$user1 = new User(1, "Gabriel", "kelmer@gmail.com", "xxxxxxxx", "Guapo, rico y distinguido", "c\ Boqueixón", "Santiago", array("Tennis", "Football"), array("Cat"), "M", "avatar.jpg");
		$user2 = new User(2, "Pancracio", "pancra@cio.com", "yyyyyyyy", "Hermoso como la vida misma", "c\ Paraíso", "Siuda del visio", array("Golf"), array("Monkey", "Dog"), "F", "notiene.jpg");

		$this->userList[0] = $user1;
		$this->userList[1] = $user2;*/
	}
	
	public function getUserList()
	{
		// here goes some hardcoded values to simulate the database

		

		$lines = file ( "usuarios.txt" );
		
		
		
		/*foreach ( $lines as $line_num => $line ) {
			echo "<tr>";
			$attributes = explode ( "|", $line );
			//$user = new User();
			foreach ( $attributes as $clave => $valor ) {
				echo "<td>";
				echo $valor;
				echo "</td>";
			}
			echo "<td> <a href=\"\">Update</a>, <a href=\"\">delete</a> </td>";
		
		
			echo "</tr>";
		}*/
		return $this->userList;
	}
	
	public function getUser($id)
	{
		// we use the previous function to get all the books and then we return the requested one.
		// in a real life scenario this will be done through a db select command
		/*$allBooks = $this->getBookList();
		return $allBooks[$title];*/
		return $this->userList[$id];
	}
	
}

?>