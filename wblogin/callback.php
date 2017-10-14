<?php
require_once './config.php';
require_once './libweibo-master/saetv2.ex.class.php';

$oa = new SaeTOAuthV2(APP_KEY, APP_SECRET);
$keys = [
	'code' => $_GET['code'],
	'redirect_uri' => CALLBACK
];
$arr = $oa->getAccessToken('code', $keys);
setcookie('accesstoken', $arr['access_token'], time() + 86400);

header('Location:index.php');