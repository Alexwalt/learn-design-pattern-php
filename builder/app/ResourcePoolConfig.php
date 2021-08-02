<?php
/**
 * User: 小水
 * Date: 2021-07-28
 */

namespace App;

class ResourcePoolConfig
{
	private $name;
	private $maxTotal;
	private $maxIdle;
	private $minIdle;
	public function __construct(Builder $builder)
	{
		$this->name = $builder->name;
		$this->maxIdle = $builder->maxIdle;
		$this->maxTotal = $builder->maxTotal;
		$this->minIdle = $builder->minIdle;
	}
}