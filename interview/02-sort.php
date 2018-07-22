<?php

/**
 * 题目：写一个排序算法，可以是冒泡排序或者是快速排序
 */

// 冒泡排序
function bubble_sort($array)
{
    $count = count($array);

    for ($i = 0; $i < $count - 1; $i++) { 
        for ($j = 0; $j < $count - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                [$array[$j + 1], $array[$j]] = [$array[$j], $array[$j + 1]];
            }
        }
    }

    return $array;
}

// 快速排序
function quick_sort($array)
{
    $count = count($array);
    if ($count <= 1) {
        return $array;
    }

    $pivot = $count >> 1;
    $left = $right = [];

    for ($i = 0; $i < $count; $i++) {
        if ($i == $pivot) {
            continue;
        }

        if ($array[$i] < $array[$pivot]) {
            $left[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }

    return array_merge(quick_sort($left), [$array[$pivot]], quick_sort($right));
}

// 测试
$array = [11, 2, 311, 14, 15, 64, 72, 82, 91, 105];
print_r(bubble_sort($array));
print_r(quick_sort($array));
