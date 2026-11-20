<?php
namespace App\Controllers;use App\Core\Database;use App\Core\Security;
final class BarcodeController{public function index():void{$books=Database::connection()->query('SELECT id,isbn,title,author FROM books ORDER BY title')->fetchAll();$title='Barcode Management';require BASE_PATH.'/app/Views/barcodes/index.php';}}
