<?php
	$url = $_SERVER['REDIRECT_URL'];
	$baseURL= '/FunCoding';
	if($_SERVER["REQUEST_METHOD"]=="GET"){
		switch ($url){
			case $baseURL."/homepage":
				require_once "Controller/homeController.php";
				$home = new HomeController();
				echo $home ->start();
				break;
			case $baseURL."/login":
				require_once "Controller/loginController.php";
				$login = new LoginController();
				echo $login -> start();
				break;
			case $baseURL."/signup":
				require_once "Controller/signupController.php";
				$signup = new SignupController();
				echo $signup -> start();
				break;
		}
	}
?>