<?php
header('Content-Type: text/html; charset=UTF-8');
highlight_file(__FILE__);
error_reporting(0);

class Animal{
    public $name = "dog";
    public $color = 'color';

    public function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }
}

$name = $_GET['name'];
$color = $_GET['color'];

$data = serialize(new Animal($name, $color));
echo "<br/>序列化后的结果：".$data."<br/>";

$data = str_replace("system()","",$data);
echo "str_replace处理后的结果：".$data."<br/>";

echo "反序列化后的结果：<br/>";
var_dump(@unserialize($data));

// tips：利用字符串逃逸增加成员属性 $weight=2

?>