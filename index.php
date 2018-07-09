<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 2018/7/9
 * Time: 13:01
 */
include_once __DIR__."/vendor/autoload.php";
use Jiang\Demo;
$data = Demo::test();
print_r($data);
