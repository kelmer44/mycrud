<?php

include_once('User.php');

class UserDao {
	
	private $file;
	public static $filename = "usuarios.txt";
	
	
	public function __construct(){
		
		$lines = file ( "usuarios.txt" );
		
		
	}
	
	public function getUserList()
	{
		// here goes some hardcoded values to simulate the database
		/*return array(
				"Jungle Book" => new Book("Jungle Book", "R. Kipling", "A classic book."),
				"Moonwalker" => new Book("Moonwalker", "J. Walker", ""),
				"PHP for Dummies" => new Book("PHP for Dummies", "Some Smart Guy", "")
		);*/
		
		return $lines;
	}
	
	public function getUser($title)
	{
		// we use the previous function to get all the books and then we return the requested one.
		// in a real life scenario this will be done through a db select command
		/*$allBooks = $this->getBookList();
		return $allBooks[$title];*/
	}
	
}

?>