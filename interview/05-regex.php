<?php

/**
 * 题目：写出匹配邮箱地址和URL的两个正则表达式。类似下面的：
 * 
 *      邮箱地址：user_name.first@example.com.cn
 *      URL地址：http://www.example.com.cn/user_profile.php?uid=100
 */

var_dump(preg_match('/^[\w\.]+@[0-9a-z\.]+$/i', 'user_name.first@example.com.cn')); // int(1)
var_dump(preg_match('/^https?:\/\/[\w\.\/]+\??[\w=]+$/i', 'http://www.example.com.cn/user_profile.php?uid=100')); // int(1)