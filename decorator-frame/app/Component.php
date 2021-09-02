<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-02
 * Time: 21:32
 */

namespace App;

/**
 * 组件对象的接口，可以给这些对象动态的添加职责
 * Class Component
 * @package App
 */
abstract class Component
{
	/**
	 * 示例方法
	 */
	public abstract function operation();
}