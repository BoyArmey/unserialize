<?php
header('Content-Type: text/html; charset=utf-8');
highlight_file(__FILE__);
error_reporting(0);

ini_set('session.serialize_handler','php_serialize');

session_start();
// 将通过get方式提交的内容保存到session中
$_SESSION['session_info'] = $_GET['info'];

// tips:读取flag.txt中的内容

?>