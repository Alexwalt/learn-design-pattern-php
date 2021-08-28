<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-08-28
 * Time: 14:35
 */

namespace App;

/**
 * 动态代理类
 * Class MetricsCollectorProxy
 * @package App
 */
class MetricsCollectorProxy
{
	protected $metricsCollector;
	protected $reflection;
	protected $target;

	public function __construct(object $target)
	{
		$this->target = $target;

		$this->reflection = new \ReflectionClass($target);

	}
	public function __call($name, $arguments)
	{
		$startTimestamp = microtime(true);

		//委托
		$method = $this->reflection->getMethod($name);
		$vo = $method->invokeArgs($this->target,$arguments);

		$endTimestamp = microtime(true);
		$this->metricsCollector = $endTimestamp - $startTimestamp;
		echo $this->metricsCollector .PHP_EOL;

		return $vo;
	}


}