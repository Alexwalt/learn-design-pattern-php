<?php
/**
 * Created by PhpStorm.
 * User: 小水
 * Date: 2021-07-28
 * Time: 11:50
 */

require __DIR__.'/vendor/autoload.php';

$impl1 = new \App\ConcreteFactory1();
$impl1->createProductA()->calc();
$impl1->createProductB()->exec();

$impl2 = new \App\ConcreteFactory2();
$impl2->createProductA()->calc();
$impl2->createProductB()->exec();