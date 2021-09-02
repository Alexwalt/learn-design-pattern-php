<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-02
 * Time: 21:38
 */

namespace App;

/**
 * 实现类A
 * Class ConcreteDecoratorA
 * @package App
 */
class ConcreteDecoratorA extends Decorator
{
	private $addState;


	public function __construct(Component $component)
	{
		parent::__construct($component);
	}

	/**
	 * @return mixed
	 */
	public function getAddState()
	{
		return $this->addState;
	}

	/**
	 * @param mixed $addState
	 */
	public function setAddState($addState)
	{
		$this->addState = $addState;
	}

	public function operation()
	{
		//...
		//添加附加操作
		echo $this->addState . PHP_EOL;
		//...
		parent::operation();
		//...
		//添加附加操作
		//使用附加状态
		//...
	}


}