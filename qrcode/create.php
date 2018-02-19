<?php
require __DIR__ . '/vendor/autoload.php';

use Endroid\QrCode\QrCode;

$qrCode = new QrCode('Life is too short to be generating QR codes~');
$qrCode->setSize('200');

// $qrCode->setLogoPath('path/to/your_logo');
// $qrCode->setLogoWidth(150);

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();

$qrCode->writeFile('./images/qrcode.png');