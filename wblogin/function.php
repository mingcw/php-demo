<?php
/**
 * 格式化打印
 * @param  [type] $data [description]
 * @return [type]       [description]
 */
function p($data){
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}