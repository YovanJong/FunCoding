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
		}
	}
?>