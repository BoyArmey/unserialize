<?php  
highlight_file(__FILE__);
// 使用UTF-8编码，防止中文乱码
header('Content-Type: text/html; charset=utf-8');

class Animal{  
    public $name = 'hello';     // 设置默认值  
    private $gender;  
    protected $age;  
    function say()  
    {  
        echo "hello";  
    }  
}  
  
$dog = new Animal();  
echo "<br/>对象序列化后的结果为：".serialize($dog)."<br/>";

?>