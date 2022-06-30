<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=161.35.59.34;dbname=pos",
			            "root",
			            "");

		$link->exec("set names utf8");

		return $link;

	}

}
