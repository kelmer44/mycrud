<?php

include_once('User.php');

class UserDao {
	public static $filename = "usuarios.txt";
	
	private $file;
	private $lines;
	
	private $userList = array();
	
	
	public function __construct(){
		
		$this->lines = file ( self::$filename );
		foreach ($this->lines as $line_num => $line ) {
			
			$attributes = explode ( "|", $line );
			$user = new User();
			
			$user->id = $attributes[0];
			$user->name = $attributes[1];
			$user->email = $attributes[2];
			$user->password = $attributes[3];
			$user->description = $attributes[4];
			$user->address = $attributes[5];
			$user->city = $attributes[6];
			$user->sports = $attributes[7];
			$user->pets = $attributes[8];
			$user->gender = $attributes[9];
			$user->picture = $attributes[10];
			
			$this->userList[$user->id] = $user;
		}
		
	}
	
	public function getUserList()
	{
		return $this->userList;
	}
	
	public function getUser($id)
	{
		return $this->userList[$id];
	}
	
}

?>