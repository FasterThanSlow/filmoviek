<?php

class Article{
	private $id;
	private $id_section;
	private $title;
	private $description;
	private $pdate;
	private $full_text;
	private $meta_key;
	private $meta_desc;
	private $id_author;
	private $img;
	private $author_name;
	public static $column_id = "id";	
	public static $column_section_id = "id_section";	
	public static $column_title = "title";
	public static $column_description = "description";
	public static $column_date = "date";
	public static $column_full_text = "full_text";
	public static $column_meta_key = "meta_key";
	public static $column_meta_desc = "meta_desc";
	public static $column_id_author = "id_author";
	public static $column_img = "promo_img";
	
	
	function __construct($id,$id_section,$title,$description,$date,$full_text,$meta_key,$meta_desc,$id_author,$img){
		$this->id = $id;
		$this->id_section = $id_section;
		$this->title = $title;
		$this->description = $description;
		$this->pdate = $date;
		$this->full_text = $full_text;
		$this->meta_key = $meta_key;
		$this->meta_desc = $meta_desc;
		$this->id_author = $id_author;
		$this->img = $img;
	}
	
	public static function rowToArticle($row){
		$id_section = $row["".Article::$column_section_id.""];
		$title = $row["".Article::$column_title.""];
	    $description = $row["".Article::$column_description.""];
	    $pdate = $row["".Article::$column_date.""];
		$full_text = $row["".Article::$column_full_text.""];
        $meta_key = $row["".Article::$column_meta_key.""];
        $meta_desc = $row["".Article::$column_meta_desc.""];
		$img = $row["".Article::$column_img.""];
		$id_author = $row["".Article::$column_id_author.""];
		$id = $row["".Article::$column_id.""];
		return new Article($id,$id_section,$title,$description,$pdate,$full_text,$meta_key,$meta_desc,$id_author,$img);
	}
	
	public function getTitle(){
		return $this->title;
	}
	
	public function getArticleDate(){
		return $this->pdate;
	}
	
	
	public function setAuthorName($name){
		$this->author_name = $name;
	}
	
	public function getAuthorName(){
		return $this->author_name;
	}
	
	public function getFullText(){
		return $this->full_text;
	}
	
	public function getAuthorId(){
		return $this->id_author;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function getDescription(){
		return $this->description;
	}
		
	public function getImg(){
		return $this->img;
	}
		
	public function getValues(){
		return array($this->id,
					 $this->id_section,
					 $this->title,
					 $this->description,
					 $this->pdate,
					 $this->full_text,
					 $this->meta_key,
					 $this->meta_desc,
					 $this->id_author,
					 $this->img);
	}
	
	public static function getColumnNames(){
		return array(Article::$column_id,
					 Article::$column_section_id,
					 Article::$column_title,
					 Article::$column_description,
					 Article::$column_date,
					 Article::$column_full_text,
					 Article::$column_meta_key,
					 Article::$column_meta_desc,
					 Article::$column_id_author,
					 Article::$column_img);
	}
	
}