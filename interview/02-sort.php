<?php

/**
 * 题目：写一个排序算法，可以是冒泡排序或者是快速排序
 */

// 算法介绍摘自维基百科(~_~)

/**
 * 冒泡排序
 * 
 * 算法：
 * 
 * 1. 比较相邻的元素。如果第一个比第二个大，就交换它们两个。
 * 2. 对每一对相邻元素作同样的工作，从开始第一对到结尾的最后一对。这步做完后，最后的元素会是最大的数。
 * 3. 针对所有的元素重复以上的步骤，除了最后一个。
 * 
 * 持续每次对越来越少的元素重复上面的步骤，直到没有任何一对数字需要比较。
 */
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

/**
 * 快速排序
 * 
 * 算法：
 * 
 * 快速排序使用分治法（Divide and conquer）策略来把一个序列（list）分为两个子序列（sub-lists）。步骤为：
 * 
 * 1. 从数列中挑出一个元素，称为"基准"（pivot）。
 * 2. 重新排序数列，所有比基准值小的元素摆放在基准前面，所有比基准值大的元素摆在基准后面（相同的数可以到任何一边）。在这个分区结束之后，该基准就处于数列的中间位置。这个称为分区（partition）操作。
 * 3. 递归地（recursively）把小于基准值元素的子数列和大于基准值元素的子数列排序。
 * 
 * 递归到最底部时，数列的大小是零或一，也就是已经排序好了。这个算法一定会结束，因为在每次的迭代（iteration）中，它至少会把一个元素摆到它最后的位置去。
 */
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

/**
 * 选择排序
 * 
 * 算法：
 * 
 * 1. 首先在未排序序列中找到最小元素，存放到排序序列的起始位置。
 * 2. 然后，再从剩余未排序元素中继续寻找最小元素，然后放到已排序序列的末尾。
 * 3. 以此类推，直到所有元素均排序完毕。
 */
function select_sort($array)
{
    $count = count($array);
    for($i = 0; $i < $count; $i++) {
        $k = $i;
        for ($j = $i + 1; $j < $count; $j++) {
            if ($array[$j] < $array[$k]) {
                $k = $j;
            }
        }
        [$array[$k], $array[$i]] = [$array[$i], $array[$k]];
    }
    return $array;
}

/**
 * 插入排序
 * 
 * 算法:
 * 1. 从第一个元素开始，该元素可以认为已经被排序
 * 2. 取出下一个元素，在已经排序的元素序列中从后向前扫描
 * 3. 如果该元素（已排序）大于新元素，将该元素移到下一位置
 * 4. 重复步骤3，直到找到已排序的元素小于或者等于新元素的位置
 * 5. 将新元素插入到该位置后
 * 6. 重复步骤2~5
 */
function insert_sort($array)
{
    $count = count($array);
    for ($i = 1; $i < $count; $i++) {      // 从第一个元素开始，该元素可以认为已经被排序
        $new = $array[$i];
        for ($j = $i - 1; $j >= 0; $j--) { // 取出下一个元素，在已经排序的元素序列中从后向前扫描
            if ($array[$j] > $new) {       // 如果该元素（已排序）大于新元素，将该元素移到下一位置
                $array[$j + 1] = $array[$j];
            } else {                       // 直到找到已排序的元素小于或者等于新元素的位置
                break;
            }
        }
        $array[$j + 1] = $new;             // 将新元素插入到该位置后
    }
    return $array;
}

// 测试
$array = [11, 2, 311, 14, 15, 64, 72, 82, 91, 105];
print_r(bubble_sort($array));
print_r(quick_sort($array));
print_r(select_sort($array));
print_r(insert_sort($array));
