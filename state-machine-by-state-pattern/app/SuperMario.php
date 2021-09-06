<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-05
 * Time: 20:12
 */

namespace App;


class SuperMario implements IMario
{
	use Singleton;


//	public function __construct(MarioStateMachine $machine)
//	{
//		self::self::$$stateMachine = $machine;
//	}
	public function getStateName()
	{
		return StateMacro::SUPER;
	}

	public function obtainMushRoom( )
	{
		// do noting
	}

	public function obtainCape()
	{
		self::$stateMachine->setCurrentState(CapeMario::getInstance(self::$stateMachine));
		self::$stateMachine->setScore(self::$stateMachine->getScore()+200);

	}

	public function obtainFireFlower()
	{
		self::$stateMachine->setCurrentState(FireMario::getInstance(self::$stateMachine));
		self::$stateMachine->setScore(self::$stateMachine->getScore()+300);

	}

	public function meetMonster()
	{
		self::$stateMachine->setCurrentState(SmallMario::getInstance(self::$stateMachine));
		$toScore = self::$stateMachine->getScore()-100;
		self::$stateMachine->setScore($toScore>=0?$toScore:0);
	}
}