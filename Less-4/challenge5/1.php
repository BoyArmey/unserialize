<?php
highlight_file(__FILE__);
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');

class Animal{
    public $name = "狗";
    private $weight;

    public function __isset($name){
        echo "<br/>__isset()方法被成员属性 $name 触发!<br/>";
    }
    
}

$animal = new Animal();

// 访问类中存在且可以访问的属性name，未触发__isset()
isset($animal->name);
// 访问类中存在 但不可以访问的属性（私有属性）weight，触发__isset()
isset($animal->weight);
// 访问类中不存在的属性age，触发__isset()
empty($animal->age);   

?>