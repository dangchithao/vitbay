<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Tools {

	public static function pr($value) {
		echo "<pre>";
		print_r($value);
		echo "</pre>";
	}

	public static function notEmpty($element) {
		return isset($element) && trim($element) != "";
	}

	public static function getBaseUrl() {
		// output: /myproject/index.php
		$currentPath = $_SERVER['PHP_SELF'];

		// output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index )
		$pathInfo = pathinfo($currentPath);

		// output: localhost
		$hostName = $_SERVER['HTTP_HOST'];

		// output: http://
		$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, 5)) == 'https://' ? 'https://' : 'http://';

		// return: http://localhost/myproject/
		return $protocol . $hostName . $pathInfo['dirname'] . "/";
	}

}
