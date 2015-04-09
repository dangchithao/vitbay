<?php

require "mysql.class.php";

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
