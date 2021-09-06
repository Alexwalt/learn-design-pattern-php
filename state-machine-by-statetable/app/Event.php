<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-05
 * Time: 19:38
 */

namespace App;


class Event
{
	const GOT_MUSHROOM = 0;
	const GOT_CAPE = 1;
	const GOT_FIRE =2 ;
	const MET_MONSTER = 3;

	protected $value;
	public function __construct($value)
	{
		$this->value = $value;
	}

	public function getValue()
	{
		return $this->value;
	}
}