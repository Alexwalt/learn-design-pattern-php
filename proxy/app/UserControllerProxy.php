<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-08-27
 * Time: 15:40
 */

namespace App;

/**
 * 代理类
 * Class UserControllerProxy
 * @package App
 */
class UserControllerProxy implements IUserController
{
	protected $metricsCollector;
	protected $userController;

	public function __construct(UserController $controller)
	{
		$this->userController = $controller;
	}

	public function login($telephone, $password)
	{
		$startTimestamp = microtime(true);
		//委托
		$vo = $this->userController->login($telephone, $password);
		$endTimestamp = microtime(true);
		$this->metricsCollector = $endTimestamp - $startTimestamp;
		echo $this->metricsCollector .PHP_EOL;

		return $vo;
	}

	public function register($telephone, $password)
	{
		$startTimestamp = microtime(true);
		//委托
		$vo = $this->userController->register($telephone, $password);
		$endTimestamp = microtime(true);
		$this->metricsCollector = $endTimestamp - $startTimestamp;

		echo $this->metricsCollector .PHP_EOL;

		return $vo;
	}
}