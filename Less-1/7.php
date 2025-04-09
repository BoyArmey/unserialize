<?php  
highlight_file(__FILE__);
// 使用UTF-8编码，防止中文乱码
header('Content-Type: text/html; charset=utf-8');

// 数组类型  
$var7 = array(25.34,66,'123');  
echo "<br/>数组类型序列化结果：".serialize($var7)."<br/>";

?>