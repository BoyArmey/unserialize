<?php
header('Content-Type: text/html; charset=utf-8');
highlight_file(__FILE__);
error_reporting(0);
class Animal {
    public $name;

    public function __wakeup() {
		    eval($this->name);
    }
}

$info = $_GET['info'];

if (isset($info)){
    echo file_exists($info);
}

// upload的中文含义是上传叭！
?>