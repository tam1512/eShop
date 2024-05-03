<?php 
use System\Core\CustomException;
session_start();
define("_WEB_PATH_ROOT", __DIR__);
define("_PATH_VIEW", dirname(__DIR__).'/src/views');
define("_PATH_CACHE", dirname(__DIR__).'/src/cache');
require_once ("../vendor/autoload.php");
define("_WEB_HOST_ROOT", getPrefixLink());
define("_WEB_HOST_ROOT_ADMIN", getPrefixLink().'/admin1');
date_default_timezone_set('Asia/Ho_Chi_Minh');
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

use Pecee\SimpleRouter\SimpleRouter as Route; 
new CustomException;
//Start the routing
Route::start();   