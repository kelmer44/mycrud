<?php
include_once("../application/models/UserDao.php");

class Controller {
	
	
	public $dao;
	
	public function __construct()
	{
		$this->dao = new UserDao();
	}
	
	public function invoke()
	{
		if (!isset($_GET['id']))
		{
			// no special book is requested, we'll show a list of all available books
			$users = $this->dao->getUserList();
			include '../application/views/UserList.php';
		}
		else {
			$id = $_GET['id'];
			$user = $this->dao->getUser($id);
			include '../application/views/ViewUser.php';
			//echo "Aquí iría el detalle de usuario";
		}
	}
}