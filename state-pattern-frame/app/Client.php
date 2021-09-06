<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-06
 * Time: 08:25
 */

namespace App;


class Client
{
	public function __construct()
	{
		$state = new Context();
		$state->getCurrentState()->toStateOne();
		$state->echoState();

		$state->getCurrentState()->toStateOne();
		$state->echoState();

		$state->getCurrentState()->toStateTwo();
		$state->echoState();

		$state->getCurrentState()->toStateOne();
		$state->echoState();

	}
}