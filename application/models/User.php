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
	
	
	public function withAllAttributes($id, $name, $email, $password, $description, $address, $city, $sports, $pets, $gender, $picture)
	{
		$instance = new self();
		$instance->id = $id;
		$instance->name = $name;
		$instance->email = $description;
		$instance->password = $password;
		$instance->description = $description;
		$instance->address = $address;
		$instance->city = $city;
		$instance->sports = $sports;
		$instance->pets = $pets;
		$instance->gender = $gender;
		$instance->picture = $picture;
		return $instance;
	}
	
	public function __construct()
	{
		
	}
	
}

?>