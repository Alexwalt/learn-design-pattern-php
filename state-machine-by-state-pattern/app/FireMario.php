<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-05
 * Time: 20:12
 */

namespace App;


class FireMario implements IMario
{
	use Singleton;


	public function getStateName()
	{
		return StateMacro::FIRE;
	}

	public function obtainMushRoom( )
	{
		// do nothing

	}

	public function obtainCape()
	{
		// do nothing

	}

	public function obtainFireFlower()
	{
		// do nothing

	}

	public function meetMonster()
	{
		self::$stateMachine->setCurrentState(SmallMario::getInstance(self::$stateMachine));
		$toScore = self::$stateMachine->getScore()-300;
		self::$stateMachine->setScore($toScore>=0?$toScore:0);
	}
}