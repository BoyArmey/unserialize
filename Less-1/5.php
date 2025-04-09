<?php  
highlight_file(__FILE__);
// 使用UTF-8编码，防止中文乱码
header('Content-Type: text/html; charset=utf-8');

// 空类型  
$var3 = null;  
echo "<br/>空类型变量序列化结果：".serialize($var3)."<br/>";

?>