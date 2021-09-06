<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-05
 * Time: 20:12
 */

namespace App;


class CapeMario implements IMario
{
	use Singleton;

	public function getStateName()
	{
		return StateMacro::CAPE;
	}

	public function obtainMushRoom( )
	{
		//do noting

	}

	public function obtainCape()
	{
		//do noting
	}

	public function obtainFireFlower()
	{
		//do noting
	}

	public function meetMonster()
	{
		self::$stateMachine->setCurrentState(SmallMario::getInstance(self::$stateMachine));
		$toScore = self::$stateMachine->getScore()-200;
		self::$stateMachine->setScore($toScore>=0?$toScore:0);
	}
}