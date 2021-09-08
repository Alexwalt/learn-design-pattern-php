<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-06
 * Time: 16:13
 */

namespace App;


class FemaleProto extends IPrototype
{
	const gender = "FEMALE";
	public $fecundity;

	public function __construct()
	{
		$this->eyeColor = "red";
		$this->wingBeat = 220;
		$this->unitEyes = 760;
	}

	function __clone()
	{
		// TODO: Implement __clone() method.
	}

}