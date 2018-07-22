<?php

/**
 * 题目：计算两个日期的差数（单位：日或者天）
 * 
 * 例如：2017-02-05 到 2017-03-06
 */

function calc_date_diff($date1, $date2)
{
    $date1 = getdate(strtotime($date1));
    $date2 = getdate(strtotime($date2));
    return abs($date1['yday'] - $date2['yday']); // 返回天数之差
}

echo calc_date_diff('2017-04-05', '2017-03-06') . PHP_EOL;