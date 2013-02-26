<?php

include_once('User.php');

class UserDao {
	public static $filename = "usuarios.txt";
	
	private $file;
	private $lines;
	
	private $userList = array();
	
	
	public function __construct(){
		
		$this->lines = file ( "usuarios.txt" );
		
		$userList[0] = new User(1, "Gabriel", "kelmer@gmail.com", "xxxxxxxx", "Guapo, rico y distinguido", "c\ Boqueixón", "Santiago", array("Tennis", "Football"), array("Cat"), "M", "avatar.jpg");
		$userList[1] = new User(2, "Pancracio", "pancra@cio.com", "yyyyyyyy", "Hermoso como la vida misma", "c\ Paraíso", "Siuda del visio", array("Golf"), array("Monkey", "Dog"), "F", "notiene.jpg");
		echo "<pre>";
		print_r($userList);
		echo "</pre>";
		/*$userList[0] = $user1;
		$userList[1] = $user2;*/
	}
	
	public function getUserList()
	{
		// here goes some hardcoded values to simulate the database
		/*return array(
				"Jungle Book" => new Book("Jungle Book", "R. Kipling", "A classic book."),
				"Moonwalker" => new Book("Moonwalker", "J. Walker", ""),
				"PHP for Dummies" => new Book("PHP for Dummies", "Some Smart Guy", "")
		);*/
		
		
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
		return $userList[$id];
	}
	
}

?>