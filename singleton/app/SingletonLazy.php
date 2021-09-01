<?php
/**
 * Created by PhpStorm.
 * User: 小水
 * Date: 2021-07-28
 * Time: 11:50
 */

namespace App;

/**
 * 懒汉式（需要时候创建实例）
 * Class SingletonLazy
 * @package App
 */
class SingletonLazy
{
	private static $instance;
	private $props = [];

	/**
	 * @return SingletonLazy
	 */
	public static function getInstance()
	{
		if(!self::$instance){
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * @param $key
	 * @param $value
	 */
	public function setProperty($key, $value)
	{
		$this->props[$key] = $value;
	}

	/**
	 * @param $key
	 * @return mixed
	 */
	public function getProperty($key)
	{
		return $this->props[$key];
	}
}