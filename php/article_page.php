<?php
require_once "page_content.php";

class ArticlePage extends PageContent{
	private $article_service;
	private $article;
	private $id;
	
	public function __construct($dbController){
		parent::__construct($dbController);
		$this->article_service = new ArticleService($dbController);
		$this->id = $_GET["id"];
	}
	
	public function getPreview($smarty){
		$this->article = $this->article_service->selectArticleById($this->id);
		$smarty->assign('section',$this->article);
		return $smarty->fetch('preview.tpl');
	}
	
	
	public function getMiddle($smarty){
		$smarty->assign('article',$this->article);
		return $smarty->fetch('article.tpl');
	}
	
	public function getBottom($smarty){
		return "";
	}
	
}