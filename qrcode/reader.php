<?php
require __DIR__ . "/vendor/autoload.php";

$qrcode = new QrReader('./images/vcard.png');
$text = $qrcode->decode(); //return decoded text from QR Code
echo '<pre>';
print_r($text);