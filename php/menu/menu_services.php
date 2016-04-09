<?php
require_once("menu_class.php");
require_once("php/services.php");

class MenuService extends Service{
	public function __construct($database_controller){
		parent::__construct("menu",$database_controller);
	}
	
	public function selectAll(){
		$data = $this->database_controller->select($this->table_name,Menu::getColumnNames());
		$result = $this->dataToCollection($data);
		return $result;
	}
	
	private function dataToCollection($data){
		$result = array();
		while($row = @mysqli_fetch_assoc($data)){
			$menu = Menu::rowToMenu($row);
			$result[] = $menu;
		}
		return $result;
	}
	
}