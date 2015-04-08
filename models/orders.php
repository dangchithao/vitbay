<?php
class Orders extends Model {
	public function __construct() {
        $this->tableName = 'users';
        parent::__construct();
    }
}