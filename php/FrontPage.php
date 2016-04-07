<?php
require_once "article/article_services.php";
require_once "/libs/Smarty.class.php";


class FrontPage{
	private $article_service;
	private $smarty;
	
	public function __construct($dbController){
		$this->article_service = new ArticleService($dbController);
		$this->smarty = new Smarty();
	}
	
	public function getContent(){
		$id = 1;
		$article = $this->article_service->selectArticleById($id);
		$this->smarty->assign('link','');
		$this->smarty->assign('title',$article->getTitle());
		$this->smarty->assign('description',$article->getDescription());
		$this->smarty->assign('author','Вадим Нехай');
		$this->smarty->assign('date',$article->getArticleDate());
		$article_promo = $this->smarty->fetch('article_promo.tpl');
		$this->smarty->assign('middle_content',$article_promo);
		$this->smarty->display('main.tpl');
	}
	
}