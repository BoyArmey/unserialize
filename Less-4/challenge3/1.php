<?php
highlight_file(__FILE__);
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');


class Animal{  
    public $name = "狗";  
    
    public function __get($name){

        if (property_exists($this, $name)) {
            echo $this->name;
        } else {
            echo "<br/> $name 不存在！__get()方法被触发！<br/>";
        }
    }
}  
  
$animal = new Animal();
$animal->age;   // 调用不存在的age属性，触发__get()方法
$animal->name;  // 调用存在的name属性，未触发__get()方法

?>