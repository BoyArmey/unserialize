<?php
highlight_file(__FILE__);
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');


class Animal{
    public $var1 = "system('cat flag.txt');";
    public function execute() {
        eval($this->var1);
    }
}

$get = $_GET["param"];
$animal = unserialize($get);
$animal->execute();

// tips:获取flag.txt中的内容

?>
