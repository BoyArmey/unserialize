<?php
highlight_file(__FILE__);
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');

class Animal{
    public $name = "狗";
    protected $weight;

    public function __unset($name){
        echo "<br/>__unset()方法被成员属性 $name 触发<br/>";
    }
}

$animal = new Animal();
// 存在且可访问的成员属性 name 不会触发__unset()方法
unset($animal->name);
// 存在但不可访问的成员属性 weight 会触发__unset()方法
unset($animal->weight);
// 不存在的成员属性 age 会触发__unset()方法
unset($animal->age);

?>