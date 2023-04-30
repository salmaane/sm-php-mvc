<?php 
session_start();

// require_once __DIR__ . "/../Autoloader/autoloader.php";     // My Custome Autoloader
require_once __DIR__ . "/vendor/autoload.php";                 // Composer Autoloader

// config
require_once 'app/Core/config.php';
// Core functions
require_once 'app/Core/functions.php';

use App\Core\App;

$app = new App();

?>