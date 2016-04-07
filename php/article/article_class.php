<?php

class Article{
	private $id_section;
	private $title;
	private $description;
	private $pdate;
	private $full_text;
	private $meta_key;
	private $meta_desc;
	private $id_author;
	public static $column_section_id = "id_section";	
	public static $column_title = "title";
	public static $column_description = "description";
	public static $column_date = "date";
	public static $column_full_text = "full_text";
	public static $column_meta_key = "meta_key";
	public static $column_meta_desc = "meta_desc";
	public static $column_id_author = "id_author";
	
	
	function __construct($id_section,$title,$description,$date,$full_text,$meta_key,$meta_desc){
		$this->id_section = $id_section;
		$this->title = $title;
		$this->description = $description;
		$this->pdate = $date;
		$this->full_text = $full_text;
		$this->meta_key = $meta_key;
		$this->meta_desc = $meta_desc;
	}
	
	public static function rowToArticle($row){
		$id_section = $row["".Article::$column_section_id.""];
		$title = $row["".Article::$column_title.""];
	    $description = $row["".Article::$column_description.""];
	    $pdate = $row["".Article::$column_date.""];
		$full_text = $row["".Article::$column_full_text.""];
        $meta_key = $row["".Article::$column_meta_key.""];
        $meta_desc = $row["".Article::$column_meta_desc.""];
		return new Article($id_section,$title,$description,$pdate,$full_text,$meta_key,$meta_desc);
	}
	
	public function getTitle(){
		return $this->title;
	}
	
	public function getArticleDate(){
		return $this->pdate;
	}
	
	public function getDescription(){
		return $this->description;
	}
		
	public function getValues(){
		return array($this->id_section,
					 $this->title,
					 $this->description,
					 $this->pdate,
					 $this->full_text,
					 $this->meta_key,
					 $this->meta_desc);
	}
	
	public static function getColumnNames(){
		return array(Article::$column_section_id,
					 Article::$column_title,
					 Article::$column_description,
					 Article::$column_date,
					 Article::$column_full_text,
					 Article::$column_meta_key,
					 Article::$column_meta_desc);
	}
	
}