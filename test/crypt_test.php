<?php
require dirname(__DIR__).'/vendor/autoload.php';

use Kongflower\Crypt\Crypt;

//加密
$encrypt = Crypt::getInstance()->crypt('test','ENDODE','skinrun');
var_dump(urlencode($encrypt));

//解密
$dencrypt = Crypt::getInstance()->crypt(urldecode($encrypt),'DECODE','skinrun');
var_dump($dencrypt);