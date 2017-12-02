<?php
// 使用 phpqrcode 生成电子名片

require './phpqrcode/qrlib.php';

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

QRcode::png($vcard);

// define('EOL', "\r\n");

// $vcard  = 'BEGIN:VCARD'.EOL;
// $vcard .= 'VERSION:2.1'.EOL;
// $vcard .= 'N:Jin;mingc'.EOL;
// $vcard .= 'FN:mingc'.EOL;
// $vcard .= 'ORG:free man'.EOL;
// $vcard .= 'TITLE:PHPer'.EOL;
// $vcard .= 'TEL;WORK;VOICE:1382173xxxx'.EOL;
// $vcard .= 'TEL;HOME;VOICE:1383284xxxx'.EOL;
// $vcard .= 'ADR;WORK;TianJin, China'.EOL;
// $vcard .= 'LABEL;WORK;ENCODING=QUOTED-PRINTABLE:TianJin, China(LABEL;WORK)'.EOL;
// $vcard .= 'ADR;HOME;TianJin, China'.EOL;
// $vcard .= 'LABEL;HOME;ENCODING=QUOTED-PRINTABLE:TianJin, China(LABEL;HOME)'.EOL;
// $vcard .= 'EMAIL;PREF;INTERNET:name@example.com'.EOL;
// $vcard .= 'REV:20171201T005548Z'.EOL;
// $vcard .= 'END:VCARD';