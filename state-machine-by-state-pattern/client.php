<?php
/**
 * Created by PhpStorm.
 * User: 小水
 * Date: 2021-07-28
 * Time: 11:50
 */
require __DIR__.'/vendor/autoload.php';


$machine = new \App\MarioStateMachine();

$machine->getCurrentState()->obtainMushRoom();
$machine->getCurrentState()->obtainCape();
//$machine->getCurrentState()->obtainFireFlower();
//$machine->getCurrentState()->meetMonster();

//
$score = $machine->getScore();
$state = $machine->getCurrentState()->getStateName();
////
echo "mario score: " . $score  . "; state: " . $state. PHP_EOL;
