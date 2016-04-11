<?php

class User{
	private $login;
	private $password;
	private $email;
	private $id_type;
	private $name;
	public static $column_login = "login";
	public static $column_password = "password";
	public static $column_email = "email";
	public static $column_id_type = "id_type";
	public static $column_name = "name";
	
	function __construct($login,$password,$email,$id_type,$name){
		$this->login =$login;
		$this->password = $password;
		$this->email = $email;
		$this->id_type = $id_type;
		$this->name = $name;
	}
	
	public static function rowToUser($row){
		$login = $row["".User::$column_login.""];
		$password = $row["".User::$column_password.""];
		$email = $row["".User::$column_email.""];
		$id_type = $row["".User::$column_id_type.""];
		$name = $row["".User::$column_name.""];
		return new User($login,$password,$email,$id_type,$name);
	}
	
	public static function getColumnNames(){
		return array(User::$column_login,User::$column_password,User::$column_email,User::$column_id_type,User::$column_name);
	}
	
	public function getValues(){
		return array($this->login,$this->password,$this->email,$this->id_type,$this->name);
	}
	
	public function editUser($newLogin,$newPassword,$newEmail,$newIdType,$newName){
		setLogin($newLogin);
		setPassword($newPassword);
		setEmail($newEmail);
		setIdType($newIdType);
		setName($newName);
	}
	
	private function setIdType($id_type){
		$this->id_type = $id_type;
	}
	
	private function setName($name){
		$this->name = $name;
	}
	
	public function getLogin(){
		return $this->login;
	}
		
	public function getPassword(){
		return $this->password;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function getName(){
		return $this->name;
	}
	
	private function setEmail($email){
		$this->email = $email;
	} 
	
	private function setPassword($password){
		$this->password = $password;
	} 
	
	private function setLogin($login){
		$this->login = $login;
	} 
}