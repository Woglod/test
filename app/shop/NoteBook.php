<?php


namespace App\shop;


class NoteBook
{
    private $brand = "HP";

    public function __construct()
    {
        echo "I am NoteBook " . $this->brand . '<br>';
    }

    public function setBrand($brand)
    {
        $this->brand = $brand . '<br>';
    }

    public function getBrand(){
        return $this->brand . '<br>';
    }
}