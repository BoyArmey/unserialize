<?php
header('Content-Type: text/html; charset=utf-8');
highlight_file(__FILE__);
error_reporting(0);

class Animal{
    public $age;
    public $weight;

    public function __wakeup(){
        $this->weight = md5(rand(4444,10000));
        if($this->age === $this->weight){
            eval('system("cat flag.txt");');
        }
    }
}

$info = $_GET['info'];
$info = unserialize($info);

?>