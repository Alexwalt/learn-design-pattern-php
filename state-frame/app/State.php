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
	/**
	 * 用于枚举的数组，值要唯一
	 */
	const EnumState = [
		'SMALL' => 0,
		'SUPER' => 1 ,
		'FIRE' => 2 ,
		'CAPE' => 3
	];
	private $value;

	/**
	 * State constructor.
	 */
	public function __construct()
	{
		//判断键值是否唯一，防止写错
		if(count(array_unique(array_values(self::EnumState)))   != count(self::EnumState))
		{
			throw new \Exception('Key value is not unique!');
		}
		$this->value = self::EnumState['SMALL'];
	}

	/**
	 * @return false|int|string
	 */
	public function getValue(){

		return array_search($this->value,self::EnumState);
	}


	/**
	 * @param $value
	 * @throws \Exception
	 */
	public function setValue($value){
		if( !in_array($value,array_keys(self::EnumState))) {
			throw new \Exception('Don\'t in this state!');
		}
			$this->value = self::EnumState[$value];

	}
}
