<?php 
require_once("database_controller.php");
abstract class Service{
	protected $table_name;
	protected $database_controller;
	
	function __construct($table_name,$database_controller){
		$this->database_controller = $database_controller;
		$this->table_name = $table_name;
	}
	
	public function deleteById(int $id){
		return $this->database_controller->delete_record($table_name,"id=",$id);
	}
	
}