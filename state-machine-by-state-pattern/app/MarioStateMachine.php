<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-08-08
 * Time: 12:50
 */

namespace App;


class MarioStateMachine
{
	private $score;
	public $currentState;


	public function __construct()
	{
		//start from
		$this->currentState = SmallMario::getInstance($this);
		$this->score = 0;

	}

    public function getScore() {
        return $this->score;
    }
    public function setScore($score)
    {
    	$this->score = $score;
    }


    public function getCurrentState() {
        return $this->currentState;
    }


	public function setCurrentState(IMario $state)
	{
		$this->currentState = $state;
	}

}