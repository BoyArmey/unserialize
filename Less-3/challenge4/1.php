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

    public function __wakeup(){  
        echo "__wakeup()函数被触发了！";
    }  
}  

$animal = new Animal('狗',5,100);
$info = serialize($animal);
unserialize($info);
?>