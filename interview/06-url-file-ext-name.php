<?php

/**
 * 题目：写一个函数，尽可能高效地从一个标准URL里取出文件扩展名
 *
 * 例如：http://www.sina.com.cn/abc/de/fg.php?id=1
 */

 function get_ext_name($url)
 {
    $filename = basename($url);
    $ext = explode('.', $filename)[1];
    return explode('?', $ext)[0];
 }

 echo get_ext_name('http://www.sina.com.cn/abc/de/fg.php?id=1') . PHP_EOL;
 echo get_ext_name('http://www.sina.com.cn/abc/de/fg.php') . PHP_EOL;