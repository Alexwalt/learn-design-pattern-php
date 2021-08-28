<?php
/**
 * User: 小水
 * Date: 2021-07-28
 */
require __DIR__.'/vendor/autoload.php';

$controller = new \App\MetricsCollectorProxy(new \App\UserController());
$controller->login('boo','oob');
$controller->register('boo','oob');
