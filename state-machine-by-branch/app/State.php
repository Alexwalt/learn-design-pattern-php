<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-08-08
 * Time: 12:45
 */

namespace App;

class State
{
//	/**
//	 * 用于枚举的数组，值要唯一
//	 */
//	const EnumState = [
//		'SMALL' => 0,
//		'SUPER' => 1 ,
//		'FIRE' => 2 ,
//		'CAPE' => 3
//	];
	const SMALL = 0;
	const SUPER = 1;
	const FIRE = 2;
	const CAPE = 3;

	private $value;

	/**
	 * State constructor.
	 */
	public function __construct()
	{
		//判断键值是否唯一，防止写错
		$this->value = self::SMALL;
	}

	/**
	 * @return false|int|string
	 */
	public function getValue(){

		return $this->value;
	}


	/**
	 * @param $value
	 */
	public function setValue($value){

		$this->value = $value;
	}

	public function equals($value)
	{
		return $this->value==$value;
	}
}
