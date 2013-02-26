<?php

include_once('User.php');
include_once('UserDao.php');

class UserDaoFile implements UserDao {
	public static $filename = "usuarios.txt";
	
	private $file;
	private $lines;
	
	private $userList = array();
	
	
	public function __construct(){
		
		$this->lines = file ( self::$filename );
		$i = 0;
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
			$user->sports = explode(",", $attributes[7]);
			
			
			$user->pets = explode(",", $attributes[8]);
			$user->gender = $attributes[9];
			$user->picture = trim($attributes[10]);
		
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
	
	public function deleteUser($id){
		unset($this->userList[$id]);
		$this->commitToFile();
	}
	
	public function addOrUpdateUser($user){
		if(isset($user->id) && isset($this->userList[$user->id])){
			echo "Usuario actualizado. <br />";
			echo "<a href=\"index.php\">Volver</a>";
			
		}	
		else {
			$user->id = $this->getMaxId();
			echo "Usuario creado con clave ".$user->id."<br />";
			echo "<a href=\"index.php\">Volver</a>";
		}		
		//Como borramos y guardamos de cada vez, actualizar y guardar son la misma acción
		$this->userList[$user->id] = $user;
		$this->commitToFile();
	}
	
	private function getMaxId(){
		$id = 0;
		foreach($this->userList as $key => $value){
			//echo "KEY".$key."<br/>";
			if($key > $id)
				$id = $key;
		}
		$id++;
		
		return $id;
	}
	
	
	private function commitToFile(){
		/*echo "<pre>";
			print_r($this->userList);
		echo "</pre>";*/
		$data ="";
		foreach($this->userList as $user){
			$data.=$user->id."|";
			$data.=$user->name."|";
			$data.=$user->email."|";
			$data.=$user->password."|";
			$data.=$user->description."|";
			$data.=$user->address."|";
			$data.=$user->city."|";
			$data.=implode(",",$user->sports)."|";
			$data.=implode(",",$user->pets)."|";
			$data.=$user->gender."|";
			$data.=$user->picture;
			$data.="\r\n";
		}
		//echo $data;
		file_put_contents(self::$filename, $data);
		
		
	}
}

?>