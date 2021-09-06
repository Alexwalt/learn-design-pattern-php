<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-06
 * Time: 08:23
 */

namespace App;


class Context
{
	protected $currentState;
	public function __construct()
	{
		//init state
		$this->currentState = new StateOne($this);
	}

	public function setCurrentState( IState $state)
	{
		$this->currentState = $state;
	}
	public function getCurrentState()
	{
		return $this->currentState;
	}

	public function echoState()
	{
		echo get_class($this->currentState) . PHP_EOL;
	}
}