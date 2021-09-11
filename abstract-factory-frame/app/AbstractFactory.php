<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-11
 * Time: 17:10
 */

namespace App;


interface AbstractFactory
{
	public function createProductA();
	public function createProductB();
}