<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Users extends Model {
    public function __construct() {
        $this->tableName = 'users';
        parent::__construct();
    }
}