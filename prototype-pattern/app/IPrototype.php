<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-06
 * Time: 16:13
 */

namespace App;


abstract class IPrototype
{
	public $eyeColor;
	public $wingBeat;
	public $unitEyes;
	abstract function __clone();

}