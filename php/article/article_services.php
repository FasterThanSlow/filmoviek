<?php

require_once("article_class.php");
require_once("php/services.php");

class ArticleService extends Service{
	
	function __construct($database_controller){
		parent::__construct("articles",$database_controller);
	}
	
	public function addArticle(Article $post){
		return $this->database_controller->insert($this->table_name,Article::getColumnNames(),$post->getValues());
	} 
	
	public function selectAllArticles(){
		$data = $this->database_controller->select($this->table_name,Article::getColumnNames());
		return $this->postsToCollections($data);
	}
	
	public function selectArticlesByDate($date){
		$data = $this->database_controller->select($this->table_name,Article::getColumnNames(),"date='".$date."'");
		return $this->postsToCollections($data);
	}
	
	public function selectArticleById(int $id){
		$data = $this->database_controller->select($this->table_name,Article::getColumnNames(),"id=".$id);
		$row = @mysqli_fetch_assoc($data);
		return Article::rowToArticle($row);
	}
	
	public function selectArticlesBySection(int $id_section){
		$data = $this->database_controller->select($this->table_name,Article::getColumnNames(),"id_section='".$id_section."'");
		return $this->postsToCollections($data);
	}
	
	private function postsToCollections($data){
		$result = array();
		while($row = @mysqli_fetch_assoc($data)){
			$post = Article::rowToArticle($row);
			$result[] = $post;
		}
		return $result;
	}
}
