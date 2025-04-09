<?php
header('Content-Type: text/html; charset=utf-8');
highlight_file(__FILE__);
error_reporting(0);


class User{
    public $name;
    public $password;
    public $register = false; // 判断用户是否注册

    public function __construct($name,$password){
        $this->name = $name;
        $this->password = $password;
    }
}

// 过滤函数
function fliter($str){
    return str_replace("flag","a",$str);
}

$name = $_GET['name'];
$password = $_GET['password'];

$info = serialize(new User($name, $password));
$user = unserialize(fliter($info));

if($user->register){
    eval("system('cat flag.txt');");
}


?>