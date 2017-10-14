<?php
require_once './config.php';
require_once './libweibo-master/saetv2.ex.class.php';
require_once './function.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>微博登录</title>
</head>
<body>
	<?php if(!isset($_COOKIE['accesstoken'])){ ?>
		<a href="./wblogin.php"><img src="./libweibo-master/weibo_login.png" alt="微博登录" title="微博登录"></a>
	<?php } else { ?>
		<p>您已成功登录！<a href="wblogout.php">退出登录</a></p>
	<?php
		$c = new SaeTClientV2(APP_KEY, APP_SECRET, $_COOKIE['accesstoken']);
		// $info = $c->user_timeline_by_id(); // 获取用户发布的微博信息列表
		// $info = $c->home_timeline(); // 获取当前用户及关注用户的最新消息
		// $info = $c->public_timeline(); // 获取最新的公共微博消息
		// $info = $c->share('来自测试的微博2' . 'http://google.com/'); // 分享一条微博（至少要带上一个来源URL）
		// $info = $c->share('来自测试的带图片微博' . 'http://google.com', '@./pic.jpg'); // 分享一条微带图片微博
		$info = $c->destroy(4.1628612301107E+15); // 删除一篇微博
		p($info);
	} ?>
</body>
</html>