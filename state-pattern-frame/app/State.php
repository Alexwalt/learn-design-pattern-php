<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-06
 * Time: 08:33
 */

namespace App;


abstract class State implements IState
{
	protected $context;

	public function __construct(Context $context)
	{
		$this->context = $context;
	}
}