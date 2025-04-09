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
        //echo '<br/>__sleep()函数被触发<br/>'; 
        return array('name','age');
        //return array('name','age','price');
    }  
}  

$animal = new Animal('狗',5,100);
$info = serialize($animal);
echo $info;
?>