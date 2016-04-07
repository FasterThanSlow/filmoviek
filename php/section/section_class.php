<?php

class Section{
	private $title;
	private $description;
	private $slink;
	private $meta_key;
	private $meta_desc;
	public static $column_title = "title";
	public static $column_description = "description";
	public static $column_link = "link";
	public static $column_meta_key = "meta_key";
	public static $column_meta_desc = "meta_desc";
	
	function __construct($title,$description,$link,$meta_key,$meta_desc){
		$this->title = $title;
		$this->description = $description;
		$this->slink = $link;
		$this->meta_key = $meta_key;
		$this->meta_desc = $meta_desc;
	}
	
	public static function rowToSection($row){
		$title = $row["".Section::$column_title.""];
		$description = $row["".Section::$column_description.""];
		$link = $row["".Section::$column_link.""]; 
		$meta_key = $row["".Section::$column_meta_key.""];
		$meta_desc = $row["".Section::$column_meta_desc.""];
		return new Section($title,$description,$link,$meta_key,$meta_desc);
	}
	
	public function getValues(){
		return array($this->title,
					 $this->description,
					 $this->slink,
					 $this->meta_key,
					 $this->meta_desc);
	}
	
	public static function getColumnNames(){
		return array(Section::$column_title,
					 Section::$column_description,
					 Section::$column_link,
					 Section::$column_meta_key,
					 Section::$column_meta_desc);
	}
}