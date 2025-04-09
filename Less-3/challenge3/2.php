<?php
highlight_file(__FILE__);
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');


class Animal{ 
    public $name;
    public $age;
    public $price;

    public function __construct($name,$age,$price){
        $this->name = $name;
        $this->age = $age;
        $this->price = $price;
    }

    public function __sleep(){  
        eval($this->name);
    }  
}  

$info = $_GET['info'];
$info = unserialize($info);
$animal = new Animal($info->name,$info->age,$info->price);
serialize($animal);

// tips：获取flag.txt中的内容

?>