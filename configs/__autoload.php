<?php
/**
 * Coding by Dang Chi Thao - 2014.09.24
 * 
 * Autoload libs and app
 */

spl_autoload_register('loadLibs');
spl_autoload_register('loadApp');

function loadLibs($class) {
    if (!file_exists(SMARTY_DIR . "Smarty.class.php")) {
        return false;
    }
    
    require_once(SMARTY_DIR . "Smarty.class.php");
    
    return true;
}

function loadApp($class) {
    $folders = array("configs", "controllers", "models", "helpers", "views", "controllers/admin");
    foreach ($folders as $folder) {
        $fileName = $folder . DS . $class . ".php";
        if (is_readable($fileName)) {
            require_once $fileName;
            break;
        }
    }
}
