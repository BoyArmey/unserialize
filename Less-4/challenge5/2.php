<?php
highlight_file(__FILE__);
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');

class Animal{
    public $name = "狗";

    public function __construct($name){
        $this->name = $name;
    }

    public function __isset($name){
        eval($this->name);
    }
    
}

$info = unserialize($_GET['info']);
$animal = new Animal($info->name);
isset($animal->age);

// tips：读取flag.txt中的内容
?>