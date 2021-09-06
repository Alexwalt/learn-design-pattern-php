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
	/**
	 * 状态转移表
	 * @var array
	 */
	private static  $transitionTable = [
		[State::SUPER, State::CAPE, State::FIRE, State::SMALL],
		[State::SUPER, State::CAPE, State::FIRE, State::SMALL],
		[State::CAPE, State::CAPE, State::CAPE, State::SMALL],
		[State::FIRE, State::FIRE, State::FIRE, State::SMALL]
	];
	/**
	 * 状态转移执行动作表
	 * @var array
	 */
	private static  $actionTable =[
		[+100, +200, +300, +0],
		[+0, +200, +300, -100],
		[+0, +0, +0, -200],
		[+0, +0, +0, -300]
	];

	public function __construct(State $state)
	{
		$this->currentState = $state;
		$this->score = 0;

	}

	public function obtainMushRoom() {

		$this->executeEvent(new Event(Event::GOT_MUSHROOM));
	}

	public function obtainCape() {
		$this->executeEvent(new Event(Event::GOT_CAPE));

	}

    public function obtainFireFlower() {
	    $this->executeEvent(new Event(Event::GOT_FIRE));
	}

    public function meetMonster() {
		$this->executeEvent(new Event(Event::MET_MONSTER));
	}

    public function getScore() {
        return $this->score;
    }

    public function getCurrentState() {
        return $this->currentState->getValue();
    }

	private function executeEvent(Event $event)
	{
		$stateValue = $this->currentState->getValue();
		$eventValue = $event->getValue();
		$this->currentState->setValue(self::$transitionTable[$stateValue][$eventValue]);
		$this->score += self::$actionTable[$stateValue][$eventValue];
	}
}