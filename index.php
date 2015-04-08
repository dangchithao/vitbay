<?php
// Session construct
session_start();

// Config dir
require '__dir.php';

// Autoload
require 'configs' . DS . '__autoload.php';

// Running application
Router::run();
