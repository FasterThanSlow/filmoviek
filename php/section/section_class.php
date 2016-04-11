<?php

class Section{
	private $id;
	private $title;
	private $description;
	private $slink;
	private $meta_key;
	private $meta_desc;
	public static $column_id = "id";
	public static $column_title = "title";
	public static $column_description = "description";
	public static $column_meta_key = "meta_key";
	public static $column_meta_desc = "meta_desc";
	
	function __construct($id,$title,$description,$meta_key,$meta_desc){
		$this->id = $id;
		$this->title = $title;
		$this->description = $description;
		$this->meta_key = $meta_key;
		$this->meta_desc = $meta_desc;
	}
	
	public static function rowToSection($row){
		$id = $row["".Section::$column_id.""];
		$title = $row["".Section::$column_title.""];
		$description = $row["".Section::$column_description.""];
		$meta_key = $row["".Section::$column_meta_key.""];
		$meta_desc = $row["".Section::$column_meta_desc.""];
		return new Section($id,$title,$description,$meta_key,$meta_desc);
	}
	

	public function getValues(){
		return array($this->id,
				     $this->title,
					 $this->description,
					 $this->slink,
					 $this->meta_key,
					 $this->meta_desc);
	}
	
	public function getTitle(){
		return $this->title;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function getDescription(){
		return $this->description;
	}
	public static function getColumnNames(){
		return array(Section::$column_id,
					 Section::$column_title,
					 Section::$column_description,
					 Section::$column_meta_key,
					 Section::$column_meta_desc);
	}
}