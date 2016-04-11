<?php
require_once("php/services.php");
require_once("section_class.php");
class SectionService extends Service{
	
	function __construct($database_controller){
		parent::__construct("sections",$database_controller);
	}
	
	public function addSection(Section $section){
		return $this->database_controller->insert($this->table_name,Section::getColumnNames(),$section->getValues());
	}
	
	public function selectAllSections(){
		$data = $this->database_controller->select($this->table_name,Section::getColumnNames());
		$result = $this->sectionsToCollection($data);
		return $result;
	}
	
	public function selectSectionById(int $id){
		$data = $this->database_controller->select($this->table_name,Section::getColumnNames(),"id=".$id);
		$row = @mysqli_fetch_assoc($data);
		return Section::rowToSection($row);
	}
	
	public function selectSectionByMenuId(int $id_menu){
		$data = $this->database_controller->select($this->table_name,Section::getColumnNames(),"id_menu=".$id_menu);
		$row = @mysqli_fetch_assoc($data);
		return Section::rowToSection($row);
	}
	
		
	public function selectSectionByTitle($title){
		$data = $this->database_controller->select($this->table_name,Section::getColumnNames(),"title='".$title."'");
		$row = @mysqli_fetch_assoc($data);
		return Section::rowToSection($row);
	}
	
	
	private function sectionToCollections($data){
		$result = array();
		while($row = @mysqli_fetch_assoc($data)){
			$section = Section::rowToSection($row);
			$result[] = $section;
		}
		return $result;
	}
}