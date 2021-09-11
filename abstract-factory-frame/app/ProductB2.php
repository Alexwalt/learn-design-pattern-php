<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-11
 * Time: 17:09
 */

namespace App;


class ProductB2 implements IProductB
{
	public function exec()
	{
		echo __METHOD__ . PHP_EOL;
	}
}