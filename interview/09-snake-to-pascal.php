<?php

/**
 * 题目：请写一个函数，实现以下功能：
 * 
 * 字符串“open_door”转换成“OpenDoor”、”make_by_id”转换成”MakeById”。
 */

// 1. 数组分割+单词大写
function snake_to_pascal1($snake)
{
    $parts = explode('_', $snake);
    $pascal = '';
    foreach ($parts as $part) {
        $pascal .= ucwords($part);
    }
    return $pascal;
}

// 2. 正则替换+单词大写
function snake_to_pascal2($snake)
{
    $pascal =  preg_replace_callback('/_[a-z]/', function ($match) {
        return ucwords(substr($match[0], 1));
    }, $snake);
    return ucwords($pascal);
}

echo snake_to_pascal1('make_by_id') . PHP_EOL;
echo snake_to_pascal2('make_by_id') . PHP_EOL;