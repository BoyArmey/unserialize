<?php  
highlight_file(__FILE__);
// 使用UTF-8编码，防止中文乱码
header('Content-Type: text/html; charset=utf-8');

// 浮点类型  
$var4 = 1.23;  
echo "<br/>浮点类型变量序列化结果：".serialize($var4)."<br/>";

?>