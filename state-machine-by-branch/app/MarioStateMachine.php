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
		$this->score = 0;

	}

	public function obtainMushRoom() {
		if ($this->currentState->equals(State::SMALL) )
		{
			$this->currentState->setValue(State::SUPER);
			$this->score += 100;
		}
	}

	public function obtainCape() {
		if ($this->currentState->equals(State::SMALL)
			|| $this->currentState->equals(State::SUPER)  )
		{
			$this->currentState->setValue(State::CAPE);
			$this->score += 200;
		}
	}

    public function obtainFireFlower() {
	    if ($this->currentState->equals(State::SMALL)
		    || $this->currentState->equals(State::SUPER)   )
	    {
		    $this->currentState->setValue(State::FIRE);
		    $this->score += 300;
	    }
	}

    public function meetMonster() {
	    if ($this->currentState->equals(State::SUPER) )
	    {
	    	$this->currentState->setValue(State::SMALL) ;
	    	$this->score -= 100;
	    	return;
	    }

	    if ($this->currentState->equals(State::CAPE))
	    {
		    $this->currentState->setValue(State::SMALL) ;
		    $this->score -= 200;
		    return;
	    }

	    if ($this->currentState->equals(State::FIRE) )
	    {
		    $this->currentState->setValue(State::SMALL) ;
		    $this->score -= 300;
		    return;
	    }

	}

    public function getScore() {
        return $this->score;
    }

    public function getCurrentState() {
        return $this->currentState->getValue();
    }
}