<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=node118801-shopus.nl.weppa.cloud;dbname=pos",
			            "root",
			            "ZYQond18024");

		$link->exec("set names utf8");

		return $link;

	}

}
