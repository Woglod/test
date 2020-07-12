<?php


use App\shop\Book;
use App\shop\NoteBook;
use App\shop\Pencil;

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . "/../vendor/autoload.php";

$book = new Book();
$pencil = new Pencil();
$pencil->getQuantity();

$notebook = new NoteBook();

echo $notebook->getBrand();
$notebook->setBrand('Samsung');
echo $notebook->getBrand();