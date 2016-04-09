<?php
require_once "page_content.php";

class FrontPage extends PageContent{
	private $article_service;
	private $section_service;
	private $page;
	
	public function __construct($dbController){
		parent::__construct($dbController);
		$this->article_service = new ArticleService($dbController);
		$this->section_service = new SectionService($dbController);
		$this->page = (isset($_GET["page"])) ? $_GET["page"] : 1;
	}
	
	public function getPreview($smarty){
		$section = $this->section_service->selectSectionByTitle("Главная страница");
		$smarty->assign('section',$section);
		return $smarty->fetch('preview.tpl');
	}
	
	
	public function getMiddle($smarty){
		$articles = $this->article_service->selectAllArticles();
		$new_articles = $this->getArticlesOnPage($articles,$this->page);
		$smarty->assign('articles',$new_articles);
		return $smarty->fetch('article_promo.tpl');
	}
	
	public function getBottom($smarty){
		return "";
	}
	
}