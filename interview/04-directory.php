<?php

/**
 * 题目：写一个遍历指定目录下所有子目录和子文件的函数（提示：可以使用递归的方法）
 */

function list_dir($dir, $level = 0)
{
    if (!is_dir($dir)) {
        return false;
    }

    $list = scandir($dir);
    foreach ($list as $file) {
        if ($file == '.' || $file == '..') {
            continue;
        }

        echo str_repeat(' ', 3 * $level) . '|- ' . $file . PHP_EOL;
        list_dir($dir . DIRECTORY_SEPARATOR . $file, $level + 1);
    }
}

list_dir('/tmp/test');