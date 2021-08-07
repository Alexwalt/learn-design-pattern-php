<?php
/**
 * Created by PhpStorm.
 * User: 小水
 * Date: 2021-07-28
 * Time: 11:50
 */
require __DIR__.'/vendor/autoload.php';

$chain = new \App\HandlerChain();
$chain->addHandler(new \App\HandlerA());
$chain->addHandler(new \App\HandlerB());
$chain->handle();

