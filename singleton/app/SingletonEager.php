<?php
/**
 * Created by PhpStorm.
 * User: 小水
 * Date: 2021-07-28
 * Time: 11:50
 */

namespace App;

/**
 * 饿汉式（提前创建实例）
 * 理论代码如下，但实际不好使！
 * 理论代码如下，但实际不好使！
 * 理论代码如下，但实际不好使！
 *
 * Class SingletonEager
 * @package App
 */
class SingletonEager
{
	private static $instance;
	private $props = [];

	public function __construct()
	{
		self::$instance = new self();
	}

	/**
	 * @return SingletonEager
	 */
	public static function getInstance()
	{
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