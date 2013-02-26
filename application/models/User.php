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
	
	/**
	 * 
	 * @param int $id userId
	 * @param string $name User name
	 * @param string $email User email
	 * @param string $password User password
	 * @param string $description User description
	 * @param string $address User postal address
	 * @param string $city User city or residence
	 * @param array $sports Sports liked by user
	 * @param array $pets Pets owned by user
	 * @param char $gender User gender
	 * @param string $picture User avatar picture
	 * @return User
	 */
	public static function withAllAttributes($id, $name, $email, $password, $description, $address, $city, $sports, $pets, $gender, $picture)
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