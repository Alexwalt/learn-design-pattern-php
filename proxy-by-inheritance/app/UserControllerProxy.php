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
class UserControllerProxy extends UserController
{
	protected $metricsCollector;

	public function login($telephone, $password)
	{
		$startTimestamp = microtime(true);

		//调用父类
		$vo = parent::login($telephone ,$password);

		$endTimestamp = microtime(true);
		$this->metricsCollector = $endTimestamp - $startTimestamp;
		echo $this->metricsCollector .PHP_EOL;

		return $vo;
	}

	public function register($telephone, $password)
	{
		$startTimestamp = microtime(true);

		//调用父类
		$vo = parent::register($telephone, $password);
		$endTimestamp = microtime(true);
		$this->metricsCollector = $endTimestamp - $startTimestamp;

		echo $this->metricsCollector .PHP_EOL;

		return $vo;
	}
}