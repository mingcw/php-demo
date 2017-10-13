<?php
require_once './Function/function.php';
require_once './Connect2.1/qqConnectAPI.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>QQLogin</title>
</head>
<body>
	<?php if(!isset($_COOKIE['qq_accesstoken']) || !isset($_COOKIE['qq_openid'])) { ?>
		<a href="./qqLogin.php"><img src="./Image/Connect_logo_5.png" alt="QQ登录" title="QQ登录"></a>
	<?php } else { ?>
		<a href="./qqLogout.php">退出QQ</a>
	<?php 
		$qc = new QC($_COOKIE['qq_accesstoken'], $_COOKIE['qq_openid']);
		// $result = $qc->get_user_info(); // 获取QQ用户信息
		// $result = $qc->get_info(); // 获取QQ微博信息
		// $result = $qc->add_t(['content' => '111']); // 发布一条微博
		// $result = $qc->add_pic_t(['content' => "222", 'pic' => new CURLFile(dirname(__FILE__).'/Image/pic.jpg')]); // 发布一条带图片的微博
		$result = $qc->del_t(['id' => '493384099184357']); // 删除一条微博
		p($result);
	} ?>
</body>
</html>