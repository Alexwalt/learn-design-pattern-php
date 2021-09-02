<?php
/**
 * Created by PhpStorm.
 * User: 小水
 * Date: 2021-07-28
 * Time: 11:50
 */

require __DIR__.'/vendor/autoload.php';

$component = new \App\ConcreteComponent();
$decoratorA = new \App\ConcreteDecoratorA($component);
$decoratorB = new \App\ConcreteDecoratorB($component);

$decoratorA->setAddState('win effortlessly');
$decoratorA->operation();
$decoratorB->operation();
