<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-06
 * Time: 08:23
 */

namespace App;


class StateOne extends State
{

	public function toStateOne()
	{
		// do noting
	}

	public function toStateTwo()
	{
		$this->context->setCurrentState(new StateTwo($this->context)) ;
	}
}