<?php
highlight_file(__FILE__);
// 使用UTF-8编码，防止中文乱码
header('Content-Type: text/html; charset=utf-8');

// 定义动物类
class Animal{
	// 定义成员变量
	var $name;
	var $age;

	// 定义成员函数 
	function say($language){
		echo $this->age.'岁的'.$this->name.'在'.$language."<br/>";
	}
}

// 实例化对象
$dog = new Animal();

// 成员属性（变量）赋值
$dog->name = '狗';
$dog->age = 8;

echo "<br/>";
// 调用成员方法（函数）
$dog->say('汪汪汪！');
echo "<br/>";

// 打印对象
var_dump($dog);

?>