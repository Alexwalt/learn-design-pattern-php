<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-11
 * Time: 17:08
 */

namespace App;


class ProductB1 implements IProductB
{
	public function exec()
	{
		echo __METHOD__ . PHP_EOL;
	}
}