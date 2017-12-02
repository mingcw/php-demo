<?php
// 1. 使用官网包
require './phpqrcode/qrlib.php';

QRcode::png('123', 'qrcode.png', QR_ECLEVEL_L, 8, 4, false);

// 该方法的最后一个参数有Bug，写 TRUE 时（保存并打印），并不会打印显示，需要修改源码
// QRcode::png('123', './qrcode.png', QR_ECLEVEL_L, 4, 4, TRUE);

// 2. 使用composer包
// aferrandini/phpqrcode 这个包在packagist.org上排名第一，是根据官网打包的