<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-08-27
 * Time: 15:40
 */

namespace App;

/**
 * 原始类
 * Class UserController
 * @package App
 */
class UserController
{
	/**
	 * @param $telephone
	 * @param $password
	 * @return array
	 */
	public function login($telephone, $password)
	{
		// 模拟执行时间
		usleep(100);
		echo 'login' . PHP_EOL;
		return [
			'telephone' => $telephone,
			'password' => md5($password)
		];
	}

	/**
	 * @param $telephone
	 * @param $password
	 * @return array
	 */
	public function register($telephone, $password)
	{
		// 模拟执行时间
		usleep(100);
		echo 'register' .PHP_EOL;
		return [
			'telephone' => $telephone,
			'password' => md5($password)
		];
	}
}