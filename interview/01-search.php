<?php

/**
 * 题目：写两个算法，实现顺序查找和对分查找
 */

// 顺序查找
function sequential_search($array, $value)
{
    $count = count($array);

    for ($i = 0; $i < $count; $i++) {
        if ($array[$i] == $value) {
            return $i;
        }
    }
    return -1;
}

// 对分查找
function binary_search($array, $value)
{
    $count = count($array);
    $mid = $count >> 1;
    $low = 0;
    $high = $count - 1;

    while ($low <= $high) {
        if ($array[$mid] < $value) {
            $low = $mid + 1;
        } else if( $array[$mid] > $value) {
            $high = $mid - 1;
        } else {
            return $mid;
        }
        $mid = ($low + $high) >> 1;
    }
    return -1;
}

// 测试
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
var_dump(sequential_search($array, 9));
var_dump(binary_search($array, 9));
