<?php

/**
 * This is use to manipulate with Database
 */
interface Manipulate {

    // Connect to database
    public function connect($server, $username, $password, $dbname);

    // Get all records
    public function getAll($tableName, $data = array(), $conditions = array());

    // Insert records
    public function insert($tableName, $data = array());

    // Update record
    public function update($tableName, $data = array(), $conditions = array());

    // Delete record
    public function delete($tableName, $conditions = array());
}
