<?php  
highlight_file(__FILE__);
// 使用UTF-8编码，防止中文乱码
header('Content-Type: text/html; charset=utf-8');

// 字符串变量  
$var2 = "hello world";  
echo "<br/>字符串类型变量序列化结果：".serialize($var2)."<br/>";

?>