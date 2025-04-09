<?php
highlight_file(__FILE__);
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');


class Animal{ 
    public $name;
    public function __destruct(){   
        echo "<br/>析构函数被触发<br/>";
    }  
}  

$animal = new Animal(); // 触发析构函数
$ser_animal = serialize($animal);
unserialize($ser_animal);   // 触发析构函数

?>