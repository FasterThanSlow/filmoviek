<?php
require_once "page_content.php";

class SectionPage extends PageContent{
	private $article_service;
	private $section_service;
	private $page;
	private $articles;
	private $section;
	
	public function __construct($dbController){
		parent::__construct($dbController);
		$this->article_service = new ArticleService($dbController);
		$this->section_service = new SectionService($dbController);
		$this->page = (isset($_GET["page"])) ? $_GET["page"] : 1;
	}
	
	public function getPreview($smarty){
		$this->section = $this->section_service->selectSectionById($_GET["id"]);
		$smarty->assign('section',$this->section);
		return $smarty->fetch('preview.tpl');
	}
	
	
	public function getMiddle($smarty){
		if($_GET["id"] == 5){
			$this->articles = $this->article_service->selectAllArticles();
		}else
		$this->articles = $this->article_service->selectArticlesBySection($_GET["id"]);
		$new_articles = $this->getArticlesOnPage($this->articles,$this->page);
		$smarty->assign('articles',$new_articles);
		return $smarty->fetch('article_promo.tpl');
	}
	
	public function getBottom($smarty){
		$smarty->assign('pagination',$this->getPagination($this->articles));
		return $smarty->fetch('pagination.tpl');
	}
	
}