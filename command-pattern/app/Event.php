<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-06
 * Time: 12:36
 */

namespace App;


class Event
{
	const GotDiamond = 0;
	const GotStart =1;
	const HitObstacle=2;
	const Archive = 3;
	protected $value;

	public function __construct()
	{
		$this->value = self::GotDiamond;
	}

	/**
	 * @return mixed
	 */
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * @param mixed $value
	 */
	public function setValue($value)
	{
		$this->value = $value;
	}

	public function equals($value)
	{
		return 	$this->value == $value;
	}

}