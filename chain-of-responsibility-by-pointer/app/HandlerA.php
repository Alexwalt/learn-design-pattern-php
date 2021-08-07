<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-08-07
 * Time: 21:56
 */

namespace App;


class HandlerA extends Handler
{

	public function handle()
	{
		$handled = false;

		echo "This is Handler A!" .PHP_EOL;

		if(!$handled && $this->successor!=null) {
			$this->successor->handle();
		}
	}
}