<?php
require_once "mysql.class.php";
require_once "mongo.class.php";

Class DBProvider {
	public static function getResource() {
		if (DB::$DB_DRIVER == 'mongo') {
			return T_MONGO::getInstance();
		} else if (DB::$DB_DRIVER == 'mysql') {
			return T_MYSQL::getInstance();
		} else {
			throw new Exception('DB not support.');
		}
	}
}
