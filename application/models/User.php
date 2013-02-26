<?php

class User {


	
	public $id;
	public $name;
	public $email;
	public $password;
	public $description;
	public $address;
	public $city;
	public $sports;
	public $pets;
	public $gender;
	public $picture;
	
	
	public function __construct($id, $name, $email, $password, $description, $address, $city, $sports, $pets, $gender, $picture)
	{
		$this->id = $title;
		$this->name = $author;
		$this->email = $description;
		$this->password = $password;
		$this->description = $description;
		$this->address = $address;
		$this->city = $city;
		$this->sports = $sports;
		$this->pets = $pets;
		$this->gender = $gender;
		$this->picture = $picture;
	}
	
	
	
}

?>