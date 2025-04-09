<?php
highlight_file(__FILE__);
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');

class Animal{
    public $name = "狗";

    public function __clone(){
        echo "<br/> __clone()函数被触发了！ <br/>";
    }
}

$animal = new Animal();
$new_animal = clone($animal);

?>