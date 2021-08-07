<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-08-07
 * Time: 21:56
 */

namespace App;


class HandlerB implements Handler
{

	public function handle()
	{
		echo "This is Handler B!" .PHP_EOL;
	}
}