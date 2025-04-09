<?php
highlight_file(__FILE__);
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');

class Dog{
    public $str = "aaa";

    public function exec(){
        eval($this->str);
    }
}

class Animal{
    private $obj;

    public function __construct(){
        $this->obj = new Dog();
    }

    public function __destruct(){
        $this->obj->exec();
    }
}

unserialize($_GET['info']);
// tips：读取flag.txt中的内容
?>