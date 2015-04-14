<?php

require "mysql.class.php";

Class DBProvider {
	public static function getDB() {
		$db = Configuration.getDatabase();
		
		if ($db == 'mongo') {
			return T_MONGO::getInstance();
		} else if ($db == 'mysql') {
			return T_MYSQL::getInstance();
		} else {
			throw new Exception('DB not support.');
		}
	}
}

Class Model {
    // Connect DB
    protected $THAODC;
    public $tableName;
    public $primary;
    public $fields = array();
    public $conditions = array();

    public function __construct() {
        $this->THAODC = THAODC::getInstance();
    }

    public function Add($arrayValues) {
        return $this->THAODC->insert($this->tableName, $arrayValues);
    }

    public function getList() {
        return $this->THAODC->getAll($this->tableName, $this->fields, $this->conditions);
    }

    public function getByPk() {
        
    }

}
