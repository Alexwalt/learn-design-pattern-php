<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-08-07
 * Time: 21:56
 */

namespace App;


class HandlerB extends Handler
{

	public function handle()
	{
		$handled = false;

		echo "This is Handler B!" .PHP_EOL;

		if(!$handled && $this->successor!=null) {
			$this->successor->handle();
		}
	}
}