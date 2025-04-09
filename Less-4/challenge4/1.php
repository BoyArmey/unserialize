<?php
highlight_file(__FILE__);
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');

class Animal{
    public $name = "狗";

    public function __set($name, $value){
        echo "<br/>为不存在的属性 $name 赋值，触发__set()方法";
    }
}

$animal = new Animal();
$animal->age = 12;   // 为不存在的属性赋值，触发__set()方法
$animal->name = "猫"; // 为存在的属性赋值，不会触发__set()方法

?>