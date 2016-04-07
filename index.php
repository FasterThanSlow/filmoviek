<?php
	require_once 'libs/Smarty.class.php';
	require_once 'php/FrontPage.php';
	require_once 'php/database_controller.php';
	
	$dbController = new DataBaseController();
	$page = new FrontPage($dbController);
	
	$page->getContent();