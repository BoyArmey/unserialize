<?php
header('Content-Type: text/html; charset=utf-8');
highlight_file(__FILE__);
error_reporting(0);

ini_set('session.serialize_handler','php');
session_start();

class Animal{
    public $name = 'echo "dog";';

    public function __wakeup(){
        eval($this->name);
    }
}

// tips:"提交" 的英文是 "submit" 吗？？？

?>