<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-08-07
 * Time: 21:56
 */

namespace App;


class HandlerA implements Handler
{

	public function handle()
	{
		echo "This is Handler A!" .PHP_EOL;
	}
}