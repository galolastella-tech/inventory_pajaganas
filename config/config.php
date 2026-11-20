<?php
declare(strict_types=1);
ini_set('display_errors','0'); ini_set('log_errors','1');
define('BASE_PATH', dirname(__DIR__));
define('APP_NAME','Library Inventory System');
$base=rtrim(str_replace('\\','/',dirname((string)($_SERVER['SCRIPT_NAME']??'/public/index.php'))),'/');
define('BASE_URL',rtrim((string)(getenv('APP_URL')?:$base),'/'));
define('DB_HOST','localhost'); define('DB_NAME','library_inventory'); define('DB_USER','root'); define('DB_PASS','');
date_default_timezone_set('Asia/Manila');
if(session_status()!==PHP_SESSION_ACTIVE){session_name('library_inventory_session');session_set_cookie_params(['httponly'=>true,'secure'=>!empty($_SERVER['HTTPS']),'samesite'=>'Lax']);session_start();}
