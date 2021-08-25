<?php
namespace App;

class ConcreteTemplateA extends AbstractTemplate
{
	function method1()
	{
		echo "TemplateA method1" . PHP_EOL;
	}

	function method2()
	{
		echo "TemplateA method2" . PHP_EOL;

	}
}