<?php
require_once "page_content.php";

class RegPage extends PageContent{
	
	public function __construct($dbController){
		parent::__construct($dbController);
	}
	
	public function getPreview($smarty){
		//return $smarty->fetch('preview.tpl');
	}
	
	
	public function getMiddle($smarty){
		return $smarty->fetch('form_reg.tpl');
	}
	
	public function getBottom($smarty){
		return "";
	}
	
}