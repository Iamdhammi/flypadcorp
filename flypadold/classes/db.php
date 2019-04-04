<?php

class DB {


	private static function connect() {
		$pdo = new PDO('mysql:host=127.0.0.1;dbname=flypad;charset=utf8', 'root','');
	$pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $pdo;
	}
	public static function query($query, $params = array()) {
		$statement = self::connect()->prepare($query);
		$statement->execute($params);
		//$data = $statement ->fetchAll();
		//return $data;
	}

}

?>