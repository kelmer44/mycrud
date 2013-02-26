<?php

interface UserDao {
	
	public function getUserList();
	
	public function getUser($id);
	
	public function deleteUser($id);

	public function addOrUpdateUser($id);
}

?>