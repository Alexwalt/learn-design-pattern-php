<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-05
 * Time: 20:12
 */

namespace App;


class SmallMario implements IMario
{
	use Singleton;

//	public function __construct(MarioStateMachine $machine)
//	{
//		self::self::$$stateMachine = $machine;
//	}

	public function getStateName()
	{
		return StateMacro::SMALL;
	}

	public function obtainMushRoom( )
	{
		self::$stateMachine->setCurrentState(SuperMario::getInstance(self::$stateMachine));
		self::$stateMachine->setScore(self::$stateMachine->getScore()+100);
	}

	public function obtainCape()
	{
		self::$stateMachine->setCurrentState(new CapeMario(self::$stateMachine));
		self::$stateMachine->setScore(self::$stateMachine->getScore()+200);

	}

	public function obtainFireFlower()
	{
		self::$stateMachine->setCurrentState(new FireMario(self::$stateMachine));
		self::$stateMachine->setScore(self::$stateMachine->getScore()+300);

	}

	public function meetMonster()
	{
		// do nothing
	}
}