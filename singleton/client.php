<?php
/**
 * Created by PhpStorm.
 * User: 小水
 * Date: 2021-07-28
 * Time: 11:50
 */
require __DIR__.'/vendor/autoload.php';

$inst1 = \App\SingletonEager::getInstance();
$inst1->setProperty("hello","world");
//unset($inst1);
//$inst2 = \App\SingletonEager::getInstance();
//$inst2->setProperty("mine","little water");
//echo $inst2->getProperty("hello");
