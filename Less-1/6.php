<?php  
highlight_file(__FILE__);
// 使用UTF-8编码，防止中文乱码
header('Content-Type: text/html; charset=utf-8');

// 布尔类型  
$var5 = true;  
$var6 = false;  
echo "<br/>true的序列化结果：".serialize($var5)."<br/>";  
echo "<br/>false的序列化结果：".serialize($var6)."<br/>";

?>