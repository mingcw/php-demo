<?php

/**
 * 题目：写一个二维数组排序算法
 */

// 二维数组排序，使用冒泡算法实现
function my_array_sort1($array, $field) 
{
    $count = count($array);
    for ($i = 0; $i < $count - 1; $i++) {
        for ($j = 0; $j < $count - 1 - $i; $j++) {
            if ($array[$j][$field] > $array[$j + 1][$field]) {
                [$array[$j + 1], $array[$j]] = [$array[$j], $array[$j + 1]];
            }
        }
    }
    return $array;
}

// 二维数组排序，使用快排算法实现（递归）
function my_array_sort2($array, $field) 
{
    $count = count($array);
    if ($count <= 1) {
        return $array;
    }

    $pivot = $count >> 1;
    $left = $right = [];

    foreach ($array as $k => $v) {
        if ($k == $pivot) {
            continue;
        }

        if ($v[$field] < $array[$pivot][$field]) {
            $left[] = $v;
        } else {
            $right[] = $v;
        }
    }

    return array_merge(my_array_sort2($left, $field), [$array[$pivot]], my_array_sort2($right, $field));
}

// 测试
$array = [
    ['name' => 'user01', 'age' => 18],
    ['name' => 'user02', 'age' => 21],
    ['name' => 'user03', 'age' => 23],
    ['name' => 'user04', 'age' => 19],
];
print_r(my_array_sort1($array, 'age'));
print_r(my_array_sort2($array, 'age'));
