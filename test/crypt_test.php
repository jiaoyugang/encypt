<?php

use Kongflower\Crypt\Crypt;

require dirname(__DIR__).'/vendor/autoload.php';

$res = Crypt::getInstance()->crypt(111,'ENDODE','skinrun!');

var_dump($res);