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
		$result = @mysqli_fetch_assoc($data);
		return $result;
	}
	
	
	private function sectionToCollections($data){
		$result = array();
		while($row = @mysqli_fetch_assoc($data)){
			$section = Section::sectionToPost($row);
			$result[] = $section;
		}
		return $result;
	}
}