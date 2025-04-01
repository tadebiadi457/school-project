<?php
// 配置文件内容
$config = file_get_contents("config.txt");

if ($config) {
    // 数据插入代码
    $data = "Hello, World!";

    if (file_put_contents("output.txt", $data)) {
        echo "数据已成功写入到 output.txt";
    } else {
        echo "数据未成功写入到 output.txt";
    }
} else {
    echo "配置文件不存在或内容为空";
}
