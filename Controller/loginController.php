<?php
	require_once "Controller/view.php";
	require_once "Controller/mysqlDB.php";
	class LoginController{
		protected $db;
		public function __construct(){
			$this->db = new mysqlDB("localhost", "root", "", "FunCoding");
		}

		public function start(){
			return View::createView1('login.php', [
				"nama"=> "contoh"
			]);
		}
	}
?>