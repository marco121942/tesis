<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=us-cdbr-east-02.cleardb.com;dbname=heroku_f1446373e2456be",
						"bb9aa7a71d8fc2",
						"adb39100",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}


}



