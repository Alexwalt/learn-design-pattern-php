<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-08-07
 * Time: 21:51
 */

namespace App;


class ImplStrategyB implements IStrategy
{

	public function algorithm()
	{
		echo "This is strategy b!" .PHP_EOL;
	}
}