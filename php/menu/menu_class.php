<?php

class Menu{
	private $title;
	private $page_link;
	public static $column_title = "title";
	public static $column_link = "link";
	
	public function __construct($title,$link){
		$this->title = $title;
		$this->page_link = $link;
	}
	
	public static function rowToMenu($row){
		$title = $row["title"];
		$link = $row["link"];
		return new Menu($title,$link);
	}
	
	public static function getColumnNames(){
		return array(Menu::$column_title
					,Menu::$column_link);
	}
	
	public function getValues(){
		return array($this->title, $this->page_link);
	}
	
	public function getLink(){
		return $this->page_link;
	}
	
	public function getTitle(){
		return $this->title;
	}
	
	
}