<?php
/**
 * User: 小水
 * Date: 2021-07-28
 */
require __DIR__.'/vendor/autoload.php';

$controller = new \App\UserControllerProxy(new \App\UserController());
$controller->login('boo','oob');