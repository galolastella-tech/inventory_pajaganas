<?php
declare(strict_types=1);
require dirname(__DIR__).'/config/config.php';
spl_autoload_register(function(string $class){if(str_starts_with($class,'App\\')){$f=BASE_PATH.'/app/'.str_replace('\\','/',substr($class,4)).'.php';if(is_file($f))require $f;}});
use App\Core\Auth; use App\Core\Router; use App\Core\Security;
if(($_GET['page']??'')==='login'&&$_SERVER['REQUEST_METHOD']==='POST'&&Security::validCsrf($_POST['_csrf']??null)){if(Auth::login(trim($_POST['email']??''),$_POST['password']??''))Security::redirect('dashboard');Security::flash('danger','Invalid email or password.');}
Router::dispatch();
