<?php
namespace App;

/**
 * Class ConcreteTemplateB
 * @package App
 */
class ConcreteTemplateB extends AbstractTemplate
{

	function method1()
	{
		echo "TemplateB method1" . PHP_EOL;
	}

	function method2()
	{
		echo "TemplateB method2" . PHP_EOL;

	}
}