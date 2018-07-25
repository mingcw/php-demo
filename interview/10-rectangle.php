<?php

/** 
 * 题目： * 给你四个坐标点，判断它们能不能组成一个矩形，
 * 如判断([0,0],[0,1],[1,1],[1,0])能组成一个矩形。
 */

function can_rectangle(array $pos1, array $pos2, array $pos3, array $pos4)
{
    $flag1 = $flag2 = false;
    $pow_length1 = pow($pos1['x'] - $pos3['x'], 2) + pow($pos1['y'] - $pos3['y'], 2);
    $pow_length2 = pow($pos2['x'] - $pos4['x'], 2) + pow($pos2['y'] - $pos4['y'], 2);

    if ($pow_length1 = $pow_length2) {
        $flag1 = true;
    }
    if (
        $pow_length1 = 
        pow($pos1['x'] - $pos2['x'], 2) + pow($pos1['y'] - $pos2['y'], 2) + 
        pow($pos2['x'] - $pos3['x'], 2) + pow($pos2['y'] - $pos3['y'], 2)
    ) { 
        $flag2 = true;
    }

    return $flag1 && $flag2;
}

// 测试
$pos1 = ['x' => 0, 'y' => 0];
$pos2 = ['x' => 0, 'y' => 1];
$pos3 = ['x' => 1, 'y' => 1];
$pos4 = ['x' => 1, 'y' => 0];
var_dump(can_rectangle($pos1, $pos2, $pos3, $pos4)); // bool(true)