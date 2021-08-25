<?php
namespace App;


abstract class  AbstractTemplate
{
	/**
	 * 模版类的模版方法，子类不可更改
	 */
	final public function templateMethod()
	{
		$this->method1();
		$this->method2();
	}

	/**
	 * 子类实现
	 * @return mixed
	 */
	abstract function method1();

	/**
	 * 子类实现
	 * @return mixed
	 */
	abstract function method2();
}