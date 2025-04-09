<?php
highlight_file(__FILE__);
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');


class Animal{  
    public $name = "狗";
    
    public function __construct($name){
        $this->name = $name;
    }
    
    public function speak(){
        echo "汪汪汪！";
    }

    public function __call($name, $arguments){
        echo "<br/>正在调用不存在的方法：$name<br/>";
        var_dump($arguments);
        echo "<br/>";
        eval($this->name);
    }
}  

$info = unserialize($_GET['info']);
$animal = new Animal($info->name);
$animal->fun(1);
// tips：读取flag.txt中的内容
?>