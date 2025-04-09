<?php
highlight_file(__FILE__);
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');

class Dog{
    public $str = "Dog类";

    public function exec(){
        eval($this->str);
    }
}

class Cat{
    public $str = "Cat类";

    public function exec(){
        echo $this->str;
    }
}


class Animal{
    protected $obj;

    public function __construct(){
        $this->obj = new Cat();
    }

    public function __destruct(){
        $this->obj->exec();
    }
}

unserialize($_GET['info']);
// tips：读取flag.txt中的内容
?>