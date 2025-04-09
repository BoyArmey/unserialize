<?php
highlight_file(__FILE__);
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');


class Animal{  
    public $name = "狗";  
    
    public static function speak(){
        echo "<br/>汪汪汪！";
    }

    public function __callStatic($name, $arguments){
        echo "<br/>正在调用不存在的静态方法：$name<br/>";
        var_dump($arguments);
        echo "<br/>__callStatic()函数被触发了！";
    }
}  
  
$animal = new Animal();
$animal::fun(1,'a');     // 调用不存在的静态方法，触发__callStatic()方法
$animal::speak()         // 调用存在的静态方法，不会触发__callStatic()方法
?>