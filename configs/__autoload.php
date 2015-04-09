<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
spl_autoload_register('load_core');
spl_autoload_register('load_api');
spl_autoload_register('load_lib');
spl_autoload_register('load_app');

function load_core($class) {
    $fileName = CORE_DIR . $class . ".php";
    if (is_readable($fileName)) {
        require_once $fileName;
    }
    
    return true;
}

function load_api($class) {
    if (!file_exists(SMARTY_DIR_SYSPLUGINS . $class . '.php')) {
        return false;
    }
    
    require_once(SMARTY_DIR_SYSPLUGINS . $class . '.php');
    
    return true;
}

function load_lib($class) {
    if (!file_exists(SMARTY_DIR . "Smarty.class.php")) {
        return false;
    }
    
    require_once(SMARTY_DIR . "Smarty.class.php");
    
    return true;
}

function load_app($class) {
    $folders = array("configs", "controllers", "models", "helpers", "views");
    foreach ($folders as $folder) {
        $fileName = $folder . DS . $class . ".php";
        if (is_readable($fileName)) {
            require_once $fileName;
            break;
        }
    }
}
