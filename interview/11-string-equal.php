<?php

/**
 * 题目：判断 'abc' 与 'acb' 相等，即无视字符顺序。
 */

function is_equal($str1, $str2)
{

    $len = strlen($str1);
    if ($len !== strlen($str2)) {
        return false;
    }

    for ($i = 0; $i < $len; $i++) {
        $char = substr($str1, $i, 1);
        $count = 0;
        for ($j = 0; $j < $len; $j++) {
            if ($char == substr($str2, $j, 1)) {
                if (++$count > 1) {
                    return false;
                }
            }
        }
    }

    return true;
}

// 测试
var_dump(is_equal('abc', 'abcd'));
var_dump(is_equal('abc', 'acb'));
var_dump(is_equal('abc', 'abb'));

// bool(false)
// bool(true)
// bool(false)
