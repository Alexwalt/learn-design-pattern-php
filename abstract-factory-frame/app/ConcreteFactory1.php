<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-11
 * Time: 17:11
 */

namespace App;


class ConcreteFactory1 implements AbstractFactory
{

	public function createProductA()
	{
		return new ProductA1();
	}

	public function createProductB()
	{
		return new ProductB1();
	}
}