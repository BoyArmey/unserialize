<?php  
highlight_file(__FILE__);
// 使用UTF-8编码，防止中文乱码
header('Content-Type: text/html; charset=utf-8');

// 整数型变量  
$var1 = 10;  
echo "<br/>整型变量序列化结果：".serialize($var1)."<br/>";

?>