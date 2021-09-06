<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-08-07
 * Time: 21:50
 */

namespace App;


class ImplStrategyA implements IStrategy
{

	public function algorithm()
	{
		echo "This is strategy a!" .PHP_EOL;
	}
}