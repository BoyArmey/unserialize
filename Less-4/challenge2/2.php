<?php
highlight_file(__FILE__);
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');


class Animal{  
    public static $name = "狗";  
    
    public function __construct($name){
        $this->name = $name;
    }

    public function __callStatic($name, $arguments){
        echo "<br/>正在调用不存在的静态方法：$name<br/>";
        var_dump($arguments);
        eval(self::$name);
    }
}  

$info = unserialize($_GET['info']);
$animal = new Animal();
$animal::$name = $info->name;
$animal::fun(1,'a');
// tips：读取flag.txt中的内容
?>