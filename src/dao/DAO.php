<?php

class DAO {

  // Properties
	private static $sharedPDO;
	protected $pdo;

  // Constructor
	function __construct() {

    if(empty(self::$sharedPDO)) {

      $dbHost = getenv('PHP_DB_HOST') ?: " ID282046_fifa.db.webhosting.be";
      $dbName = getenv('PHP_DB_DATABASE') ?: "ID282046_fifa";
      $dbUser = getenv('PHP_DB_USERNAME') ?: "ID282046_fifa";
      $dbPass = getenv('PHP_DB_PASSWORD') ?: "root12345";

			self::$sharedPDO = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbName, $dbUser, $dbPass);
			self::$sharedPDO->exec("SET CHARACTER SET utf8");
			self::$sharedPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$sharedPDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		}

		$this->pdo =& self::$sharedPDO;

	}

  // Methods

}

 ?>
