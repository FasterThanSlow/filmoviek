<?php

class User{
	private $login;
	private $password;
	private $email;
	public static $column_login = "login";
	public static $column_password = "password";
	public static $column_email = "email";
	
	function __construct($login,$password,$email){
		$this->login =$login;
		$this->password = $password;
		$this->email = $email;
	}
	
	public static function rowToUser($row){
		$login = $row["User::$column_login"];
		$password = $row["User::$column_password"];
		$email = $row["User::$column_email"];
		return new User($login,$password,$email);
	}
	
	public static function getColumnNames(){
		return array(User::$column_login,User::$column_password,User::$column_email);
	}
	
	public function getValues(){
		return array($this->login,$this->password,$this->email);
	}
	
	public function editUser($newLogin,$newPassword,$newEmail){
		setLogin($newLogin);
		setPassword($newPassword);
		setEmail($newEmail);
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