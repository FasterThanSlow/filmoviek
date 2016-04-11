<?php
	require_once 'php/user/user_services.php';
	require_once 'php/database_controller.php';
	
	$database_controller = new DataBaseController();
	$user_service = new UserService($database_controller);
	session_start();
	$link = $_SERVER["HTTP_REFERER"];
	
	if(isset($_POST["authorization"])){
		$login = $_POST["login"];	
		$password = $_POST["password"];
		if($user_service->checkUser($login,$password)){
			$_SESSION["login"] = $login;
			$_SESSION["password"] = $password;
		}
		header("Location: $link");
		exit;
	}
	
	if(isset($_GET["logout"])){
		unset($_SESSION["login"]);
		unset($_SESSION["password"]);
		header("Location: $link");
		exit;
	}