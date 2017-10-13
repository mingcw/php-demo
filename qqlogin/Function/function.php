<?php
/**
 * 自定义函数文件
 */

/**
 * 格式化打印
 * @param  [type] $data 要打印的变量
 * @return [type]       [description]
 */
function p($data){
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}