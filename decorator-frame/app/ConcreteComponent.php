<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-02
 * Time: 21:34
 */

namespace App;


class ConcreteComponent extends Component
{

	/**
	 * 示例方法
	 */
	public function operation()
	{
		echo "concrete component" . PHP_EOL;
	}
}