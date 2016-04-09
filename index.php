<?php
	require_once 'libs/Smarty.class.php';
	require_once 'php/front_page.php';
	require_once 'php/database_controller.php';
	require_once 'php/page_content.php';
	
	$dbController = new DataBaseController();
	$page = new FrontPage($dbController);
	
	$page->getContent();