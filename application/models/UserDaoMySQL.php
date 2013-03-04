<?php


include_once('User.php');
include_once('UserDao.php');

class UserDaoMySQL implements UserDao {
	
	private $connection;
	private $server;
	private $database;
	private $user;
	private $password;
	
	
	public function __construct($config){
		$this->server = $config['production']['db.server'];
		$this->database = $config['production']['db.database'];
		$this->user = $config['production']['db.user'];
		$this->password = $config['production']['db.password'];
		
		$this->connection = mysqli_connect($this->server, $this->user, $this->password, $this->database);
		
	}
	
	/* (non-PHPdoc)
	 * @see UserDao::getUserList()
	 */
	public function getUserList() {
		$query = "SELECT * FROM users";
		$result = mysqli_query($this->connection, $query) or die(mysql_error());
		
		$userList = array();
		while ($row = mysqli_fetch_assoc($result))
		{
			$user->id = $row['iduser'];
			$user->name = $row['name'];
			$user->email = $row['email'];
			$user->password = $row['password'];
			$user->description = $row['description'];
			$user->address = $row['address'];
			$user->city = $row['cities_idcity'];
			$user->sports = "";
			
			
			$user->pets = explode(",", $row['pets']);
			$user->gender = $row['genders_idgender'];
			$user->picture = trim($row['picture']);
			
			$userList[$user->id] = $user;
		}
		return $userList;
	}

	/* (non-PHPdoc)
	 * @see UserDao::getUser()
	 */
	public function getUser($id) {
		/*$queEmp = "SELECT * FROM users WHERE id =".$id." ORDER BY nombre ASC";
		$resEmp = mysql_query($queEmp, $this->connection) or die(mysql_error());
		return mysql_num_rows($resEmp);*/
	}

	/* (non-PHPdoc)
	 * @see UserDao::deleteUser()
	 */
	public function deleteUser($id) {
		/*$queEmp = "DELETE FROM users WHERE id =".$id;
		$resEmp = mysql_query($queEmp, $this->connection) or die(mysql_error());*/
	}

	/* (non-PHPdoc)
	 * @see UserDao::addOrUpdateUser()
	 */
	public function addOrUpdateUser($id) {
		// TODO Auto-generated method stub
		
	}

}

?>