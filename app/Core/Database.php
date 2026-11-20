<?php
namespace App\Core; use PDO; use PDOException;
final class Database{private static ?PDO $db=null;public static function connection():PDO{if(self::$db)return self::$db;try{self::$db=new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8mb4',DB_USER,DB_PASS,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,PDO::ATTR_EMULATE_PREPARES=>false]);}catch(PDOException $e){http_response_code(503);exit('Database unavailable. Import library_inventory.sql and start MySQL.');}return self::$db;}}
