<?php
/**
 * Created by PhpStorm.
 * User: 小水
 * Date: 2021-07-28
 * Time: 11:50
 */
require __DIR__.'/vendor/autoload.php';

class Month extends SplEnum {

	const default = self::January;

	const January = 1;

	const February = 2;

	const March = 3;

	const April = 4;

	const May = 5;

	const June = 6;

	const July = 7;

	const August = 8;

	const September = 9;

	const October = 10;

	const November = 11;

	const December = 12;

}

echo new Month(Month::June) . PHP_EOL;

try {

	new Month(13);

} catch (UnexpectedValueException $uve) {

	echo $uve->getMessage() . PHP_EOL;

}

//$mario = new \App\MarioStateMachine(new \App\State());
//$mario->obtainMushRoom();
//$score = $mario->getScore();
//$state = $mario->getCurrentState();
//echo "mario score: " + $score + "; state: " + $state->getValue();
