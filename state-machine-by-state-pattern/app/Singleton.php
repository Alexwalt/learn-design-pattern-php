<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-05
 * Time: 23:24
 */

namespace App;


trait Singleton
{
	private static $singleton;
	private static $stateMachine;

	public static function getInstance(MarioStateMachine $machine)
	{
		if(!self::$singleton)
		{
			self::$singleton = new self();
		}
		self::$stateMachine = $machine;
		return self::$singleton;
	}
}