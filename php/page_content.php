<?php
require_once "menu/menu_services.php";
require_once "article/article_services.php";
require_once "section/section_services.php";
require_once "/libs/Smarty.class.php";
require_once "database_controller.php";

abstract class PageContent{
	protected $database_controller;
	protected $smarty;
	
	public function __construct($database_controller){
		$this->database_controller = $database_controller;
		$this->smarty = new Smarty();
	}
	
	public function getContent(){
		$this->smarty->assign('title',$this->getTitle($this->smarty));
		$this->smarty->assign('menu',$this->getMenu($this->smarty));
		$this->smarty->assign('form_auth',$this->getFormAuth($this->smarty));
		$this->smarty->assign('weather',$this->getWeather($this->smarty));
		$this->smarty->assign('preview',$this->getPreview($this->smarty));
		$this->smarty->assign('middle_content',$this->getMiddle($this->smarty));
		$this->smarty->assign('bottom',$this->getBottom($this->smarty));
		$this->smarty->display('main.tpl');
	}
	
	protected function getArticlesOnPage($articles,$page){
		$start = ($page - 1) * 	2;
		$end = (count($articles) > ($start + 2)) ? $start + 2 : count($articles);
		$view_articles = array();
		for($i = $start; $i < $end; $i++){
			$view_articles[] = $articles[$i];
		}
		return $view_articles;
	}
	
	protected function getMenu($smarty){
		$menu_service = new MenuService($this->database_controller);
		$smarty->assign('menu',$menu_service->selectAll());
		$menu = $smarty->fetch('menu.tpl');
		return $menu;
	}
	
	protected function getFormAuth($smarty){
		return $smarty->fetch('form_auth.tpl');
	}
	
	protected function getWeather($smarty){
		$smarty->assign('city',"Минск");
		$smarty->assign('temperature',"20 градусов.");
		$smarty->assign('additional',"Без осадков.");
		return $smarty->fetch('weather.tpl');
	}
	
	protected function getTitle(){
		return "Filmoviek";
	}
	
	protected abstract function getMiddle($smarty);
	protected abstract function getPreview($smarty);
	protected abstract function getBottom($smarty);
	
	
	
	
}