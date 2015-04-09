<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// DIRECTORY 
if (!defined('DS')) {
	define("DS", DIRECTORY_SEPARATOR);
}

if (!defined('LIBRARY_DIR')) {
    define('LIBRARY_DIR', dirname(__FILE__) . DS . 'libs' . DS);
}

if (!defined('CORE_DIR')) {
    define('CORE_DIR', LIBRARY_DIR . 'core' . DS);
}

if (!defined('SMARTY_DIR')) {
    define('SMARTY_DIR', LIBRARY_DIR . 'smarty' . DS);
}

if (!defined('SMARTY_DIR_SYSPLUGINS')) {
    define('SMARTY_DIR_SYSPLUGINS', SMARTY_DIR . 'sysplugins' . DS);
}

if (!defined('SMARTY_DIR_PLUGINS')) {
    define('SMARTY_DIR_PLUGINS', SMARTY_DIR . 'plugins' . DS);
}