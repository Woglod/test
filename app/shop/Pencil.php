<?php


namespace App\shop;


class Pencil
{
    private $quantity = "100";
    public function getQuantity()
    {
        echo "На складі " . $this->quantity . " книг". '<br>';
    }
}