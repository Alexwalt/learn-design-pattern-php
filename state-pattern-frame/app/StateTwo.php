<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-06
 * Time: 08:23
 */

namespace App;


class StateTwo extends State
{

	public function toStateOne()
	{
		$this->context->setCurrentState(new StateOne($this->context));
	}

	public function toStateTwo()
	{
		// do noting
	}
}