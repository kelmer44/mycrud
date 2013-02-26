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
		if (!isset($_GET['book']))
		{
			// no special book is requested, we'll show a list of all available books
			$users = $this->dao->getUserList();
			include 'view/booklist.php';
		}
		
	}
}