<?php
highlight_file(__FILE__);
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');


class Animal{ 
    public $name;
    public function __construct($name){  
        $this->name = unserialize($name);
        eval($this->name->name);
    }  
}  

$name = $_GET['name'];
$animal = new Animal($name);

// tips：获取flag.txt中的内容

?>