# PHP 生成和识别二维码

> 包括js 生成二维码

## 使用
拉到本地，然后
```
composer install
```

## 第三方包

1. [endroid/qrcode](https://github.com/endroid/qr-code): 生成二维码，第三方包，支持 Composer 管理
2. [php-qrcode-detector-decoder](https://github.com/khanamiryan/php-qrcode-detector-decoder): 识别二维码，第三方包，支持 Composer 管理

以上这两个包还不错，比我刚开始了解二维码时用的 [phpqrcode](https://github.com/t0k4rt/phpqrcode) (生成二维码)和 [php-zbarcode](https://github.com/mkoppanen/php-zbarcode) （识别二维码）好多了。前者的代码里有点 bug, 后者需要其他的开源套件和相应的扩展模块，尤其编译安装时很容易出问题，而且只支持 php5.x。