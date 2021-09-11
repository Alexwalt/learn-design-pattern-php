<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-11
 * Time: 17:05
 */

namespace App;


class ProductA2 implements IProductA
{
	public function calc()
	{
		echo __METHOD__ . PHP_EOL;
	}

}