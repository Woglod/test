<?php


require __DIR__ . "/../vendor/autoload.php";

$book = new \ls\app\shop\Book();
$pencil = new \ls\app\shop\Pencil();
$pencil->getQuantity();

(new \ls\app\shop\NoteBook());


