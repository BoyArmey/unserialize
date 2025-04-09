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
        $this->name = 'echo "111" ';
        eval($this->name);
    }  
}  

$info = $_GET['info'];
unserialize($info);

// tips：获取flag.txt中的内容
?>