<?php


require_once("user_class.php");
require_once("php/services.php");

class UserService extends Service{
	
	function __construct($database_controller){
		parent::__construct("users",$database_controller);
	}
	
	public function addUser(User $user){
		return $this->database_controller->insert($this->tableName,User::getColumnNames(),$user->getValues()); 
	}
	
	public function selectAllUsers(){
		$data = $this->database_controller->select($this->tableName,User::getColumnNames());
		return $this->usersToCollection($data);
	}

	public function selectUserById(int $id){
		$data = $this->database_controller->select($this->tableName,User::getColumnNames(),"id=".$id);
		$row = @mysqli_fetch_assoc($data);
		return User::rowToUser($row);
	}
	
	public function selectUserByLogin(string $login){
		$data = $this->database_controller->select($this->tableName,User::getColumnNames(),"login='".$login."'");
		$row = @mysqli_fetch_assoc($data);
		return User::rowToUser($row);
	}
	
	private function usersToCollection($data){
		$result = array();
		while($row = @mysqli_fetch_assoc($data)){
			$user = User::rowToUser($row);
			$result[] = $user;
		}
		return $result;
	}
	
	
	public function deleteUserByLogin(string $login){
		return $this->database_controller->delete_record($this->tableName,"login='".$login."'");
	}
}