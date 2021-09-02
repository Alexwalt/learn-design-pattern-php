<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-02
 * Time: 21:38
 */

namespace App;

/**
 * 实现类B
 * Class ConcreteDecoratorB
 * @package App
 */
class ConcreteDecoratorB extends Decorator
{
	public function __construct(Component $component)
	{
		parent::__construct($component);
	}

	public function operation()
	{
		parent::operation();
		$this->addedBehavior();
	}

	private function addedBehavior()
	{
		echo "I'm the add behavior". PHP_EOL;
	}
}