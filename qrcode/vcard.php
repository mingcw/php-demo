<?php
require __DIR__ . '/vendor/autoload.php';
use Endroid\QrCode\QrCode;

$vcard = <<<EOL
BEGIN:VCARD
VERSION:2.1
N:Jin;mingc
FN:mingc
ORG:free man
TITLE:PHPer
TEL;WORK;VOICE:1382173xxxx
TEL;HOME;VOICE:1383284xxxx
ADR;WORK;TianJin, China
LABEL;WORK;ENCODING=QUOTED-PRINTABLE:TianJin, China(LABEL;WORK)
ADR;HOME;TianJin, China
LABEL;HOME;ENCODING=QUOTED-PRINTABLE:TianJin, China(LABEL;HOME)
EMAIL;PREF;INTERNET:name@example.com
REV:20171201T005548Z
END:VCARD
EOL;

$qrCode = new QrCode($vcard);
$qrCode->setSize('200');

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();

$qrCode->writeFile('./images/vcard.png');