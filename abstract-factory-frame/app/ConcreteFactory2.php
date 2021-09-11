<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-11
 * Time: 17:11
 */

namespace App;


class ConcreteFactory2 implements AbstractFactory
{

	public function createProductA()
	{
		return new ProductA2();
	}

	public function createProductB()
	{
		return new ProductB2();
	}
}