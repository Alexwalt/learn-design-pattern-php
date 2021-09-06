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
	private $currentState;

	public function __construct(State $state)
	{
		$this->currentState = $state;
//		$this->currentState->setValue('SMALL');
		$this->score = 0;

	}

	public function obtainMushRoom() {
		//TODO
	}

	public function obtainCape() {
		//TODO
	}

    public function obtainFireFlower() {
		//TODO
	}

    public function meetMonster() {
		//TODO
	}

    public function getScore() {
        return $this->score;
    }

    public function getCurrentState() {
        return $this->currentState->getValue();
    }
}