<?php
include_once ("../application/models/User.php");
include_once ("../application/models/UserDaoFile.php");

class Controller {
	public $dao;
	public function __construct($userFilename) {
		echo "Reading from: ".$userFilename."<br/>";		
		
		$this->dao = new UserDaoFile($userFilename);
	}
	public function invoke() {
		if (! isset ( $_GET ['action'] )) {
			$action = 'read';
		} else {
			$action = $_GET ['action'];
		}
		
		switch ($action) {
			
			default :
			case 'read' :
				if (! isset ( $_GET ['id'] )) {
					// no special book is requested, we'll show a list of all available books
					$users = $this->dao->getUserList ();
					include '../application/views/users/UserList.php';
				} else {
					$id = $_GET ['id'];
					$user = $this->dao->getUser ( $id );
					include '../application/views/users/ViewUser.php';
					// echo "Aquí iría el detalle de usuario";
				}
				break;
			case 'update' :
				if (isset ( $_GET ['id'] )) {
					$id = $_GET ['id'];
					$user = $this->dao->getUser ( $id );
				} else
					echo "Error: user id not provided";
			case 'create' :
				include '../application/views/users/UserForm.php';
				break;
			
			case 'delete' :
				if (isset ( $_GET ['id'] )) {
					$id = $_GET ['id'];
					$this->dao->deleteUser ( $id );
					$users = $this->dao->getUserList ();
					include '../application/views/users/UserList.php';
				}
				break;
			case 'save' :
				
				$filename=$_FILES['picture']['tmp_name'];
				$destinationPath  = "/uploads";
				$name = $_FILES['picture']['name'];
				$destination = $_SERVER['DOCUMENT_ROOT'].$destinationPath."/".$name;
				//mover imagen a uploads
				/*if(file_exists($destination)){
					$destination = getDestinationFileName($destination);
				}*/
				move_uploaded_file($filename, $destination);
				
				$user = User::withAllAttributes($_POST['id'], $_POST['name'], $_POST['email'], $_POST['password'],$_POST['description'],$_POST['address'],$_POST['city'],isset($_POST['sports'])?$_POST['sports']:array(),isset($_POST['pets'])?$_POST['pets']:array(),isset($_POST['gender'])?$_POST['gender']:'O',isset($_FILES['picture']['name'])?$_FILES['picture']['name']:'none.jpg');
				$this->dao->addOrUpdateUser ( $user );
				break;
		}
	}
}