<?php
highlight_file(__FILE__);
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');


class Animal{  
    public $name = "狗";  
    
    public function speak(){
        echo "<br/>汪汪汪！";
    }

    public function __call($name, $arguments){
        echo "<br/>正在调用不存在的方法：$name<br/>";
        var_dump($arguments);
        echo "<br/>__call()函数被触发了！";
    }
}  
  
$animal = new Animal();
$animal->fun(1);     // 调用不存在的函数，触发__call()方法
$animal->speak();   // 调用存在的函数，不会触发__call()方法

?>