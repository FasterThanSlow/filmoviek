<?php
	require_once 'libs/Smarty.class.php';
	require_once 'php/front_page.php';
	require_once 'php/database_controller.php';
	require_once 'php/page_content.php';
	require_once 'php/article_page.php';
	require_once 'php/reg_page.php';
	require_once 'php/section_page.php';
	
	$dbController = new DataBaseController();
	
	if(isset($_GET["view"])){
		$view = $_GET["view"];
	}else{
		$view = "";
	}
	
	switch($view){
		case "":
			$page = new FrontPage($dbController);
		break;
		case "article":
			$page = new ArticlePage($dbController);
		break;
		case "reg":
			$page = new RegPage($dbController);
		break;
		case "section":
			$page = new SectionPage($dbController);
		break;
		default:
			$page = new FrontPage($dbController);
		break;
	}
	
	$page->getContent();