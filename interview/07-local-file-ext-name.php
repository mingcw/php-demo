<?php

/**
 * 题目：使用五种以上方式，获取一个文件的扩展名
 * 
 * 要求：dir/upload.image.jpg，找出.jpg或者jpg，必须使用
 * PHP自带的处理函数进行处理，方法不能明显重复，可以封装成函
 * 数get_ext1($file_name), get_ext2($file_name)
 *
 * 例如：http://www.sina.com.cn/abc/de/fg.php?id=1
 */

 // 1. 字符串函数
 function get_ext1($file_name)
 {
    $pos = strrpos($file_name, '.');
    return substr($file_name, $pos + 1);
 }

// 2. 字符串函数
function get_ext2($file_name)
{
    $ext = strrchr($file_name, '.');
    return substr($ext, 1);
}
 
// 3. 字符串函数
function get_ext3($file_name)
{
    $rev_name = strrev($file_name);
    $rev_ext = substr($rev_name, 0, strpos($rev_name, '.'));
    return strrev($rev_ext);
}

// 4. 字符串函数+数组函数
function get_ext4($file_name)
{
    $parts = explode('.', $file_name);
    return array_pop($parts);
}

// 5. 文件系统函数
function get_ext5($file_name)
{
    $info = pathinfo($file_name);
    return $info['extension'];
}

 echo get_ext1('dir/upload.image.jpg') . PHP_EOL;
 echo get_ext2('dir/upload.image.jpg') . PHP_EOL;
 echo get_ext3('dir/upload.image.jpg') . PHP_EOL;
 echo get_ext4('dir/upload.image.jpg') . PHP_EOL;
 echo get_ext5('dir/upload.image.jpg') . PHP_EOL;