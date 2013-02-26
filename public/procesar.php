<?php
/*sclass User{
	var $id;
	var $name;
	var $email;
	var $password;
	var $description;
	var $address;
	var $city;
	var $sports;
	var $pets;
	var $gender;
	var $picture;	
}

$user = new User;
$user->id = $_POST['id'];
$user->name = $_POST['name'];
$user->email = $_POST['email'];
$user->password = $_POST['password'];
$user->description = $_POST['description'];
$user->address = $_POST['address'];
$user->city = $_POST['city'];
$user->sports = $_POST['sports'];
$user->pets = $_POST['pets'];
$user->gender = $_POST['gender'];
$user->picture = $_FILES['picture']['name'];*/

echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<pre>";
print_r($_FILES);
echo "</pre>";



include_once 'functions.php';

$filename=$_FILES['picture']['tmp_name'];
$destinationPath  = "/uploads";
$name = $_FILES['picture']['name'];
$destination = $_SERVER['DOCUMENT_ROOT'].$destinationPath."/".$name;
//mover imagen a uploads
if(file_exists($destination)){
	$destination = getDestinationFileName($destination);
}
	
move_uploaded_file($filename, $destination);
echo "<img src=\"/uploads/".$name."\" width=100px />";


$data = cambiarArray($_POST);
$data = implode("|", $data);
$data .= "|".$name;
$data .= "\r\n";
file_put_contents("usuarios.txt", $data, FILE_APPEND);
