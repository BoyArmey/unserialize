<?php
header('Content-Type: text/html; charset=UTF-8');
highlight_file(__FILE__);
error_reporting(0);

class Animal{
    public $name = 'dog';
    public $color = 'yellow';

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
}

$name = $_GET['name'];
$color = $_GET['color'];

$data = serialize(new Animal($name, $color));
echo '<br/>Animal对象的序列化结果：'.$data."<br/>";

$data = str_replace("g","**",$data);
echo '经过过滤后的字符串：'.$data."<br/>";

echo "过滤后的字符串反序列化结果：<br/>";
var_dump(@unserialize($data));

// tips：利用字符串逃逸增加成员属性 $type = little

?>