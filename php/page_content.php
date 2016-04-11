<?php
require_once "menu/menu_services.php";
require_once "article/article_services.php";
require_once "section/section_services.php";
require_once "/libs/Smarty.class.php";
require_once "database_controller.php";
require_once "user/user_services.php";

abstract class PageContent{
	protected $database_controller;
	protected $smarty;
	protected $user;
	protected $user_service;
	
	public function __construct($database_controller){
		session_start();
		$this->database_controller = $database_controller;
		$this->smarty = new Smarty();
		$this->user_service = new UserService($database_controller);
		$this->user = $this->getUser();
	
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
	
	protected function getUser(){
		if(isset($_SESSION["login"]) && isset($_SESSION["password"])){
			$login = $_SESSION["login"];
			$password = $_SESSION["password"];
			if($this->user_service->checkUser($login,$password)) return $this->user_service->selectUserByLogin($login);
			else return false;
		}
		else return false;
		
	}
	
	protected function getPagination($articles){
		$result = array();
		for($i = 1; $i <= ceil(count($articles)/2); $i++){
			$result[]=$i;
		}
		return $result;
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
		if($this->user){
			$smarty->assign("user",$this->user);
			return $smarty->fetch('user_panel.tpl');
		}else
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