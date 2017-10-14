<?php
require_once './config.php';
require_once './libweibo-master/saetv2.ex.class.php';

$oa = new SaeTOAuthV2(APP_KEY, APP_SECRET);
$callback = $oa->getAuthorizeURL(CALLBACK);
header('Location: '. $callback);