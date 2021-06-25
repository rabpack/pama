<?php
ini_set('display_errors', 1);
//ini_set('display_errors_startup', 1);
error_reporting(E_ALL);


# define base constants
define('BASE_DIR',dirname(__DIR__).'/');

# import and config env package
$dotenv = Dotenv\Dotenv::createImmutable(BASE_DIR);
$dotenv->load();

# import dd package for project debug
require_once BASE_DIR.'vendor/larapack/dd/src/helper.php';

# import helper functions
require_once BASE_DIR.'system/Helpers/Helper.php';
