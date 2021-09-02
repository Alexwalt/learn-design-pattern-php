<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-02
 * Time: 21:35
 */

namespace App;

/**
 * 装饰者抽象类
 * Class Decorator
 * @package App
 */
abstract class Decorator extends Component
{
	protected $component;

	public function __construct(Component $component)
	{
		$this->component = $component;
	}

	public function operation()
	{
		$this->component->operation();
	}


}