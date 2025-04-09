<?php
header('Content-Type: text/html; charset=utf-8');
highlight_file(__FILE__);
error_reporting(0);

session_start();
// 将通过get方式提交的内容保存到session中
$_SESSION['session_info'] = $_GET['info'];

?>