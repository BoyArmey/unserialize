<?php
highlight_file(__FILE__);
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');


class Animal{  
    public $name;  
    public function __construct($name){  
        echo "构造函数被触发";  
        $this->name = $name;  
        echo $this->name; 
    }  
}  
  
$animal = new Animal("狗");

?>