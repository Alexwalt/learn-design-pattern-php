<?php
/**
 * Created by PhpStorm.
 * User: 小水
 * Date: 2021-07-28
 * Time: 11:50
 */
require __DIR__.'/vendor/autoload.php';


$mario = new \App\MarioStateMachine(new \App\State());
$mario->obtainMushRoom();
$score = $mario->getScore();
$state = $mario->getCurrentState();

echo "mario score: " . $score  . "; state: " . $state. PHP_EOL;
