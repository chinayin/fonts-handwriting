<?php
require '../vendor/autoload.php';
use Fonts\FontsHandwriting;

$path = FontsHandwriting::getFont('CHENYULUOYAN');
assert($path['name'] == '沉鱼落雁手写体');