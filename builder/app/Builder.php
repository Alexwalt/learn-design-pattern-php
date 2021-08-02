<?php
/**
 * User: 小水
 * Date: 2021-07-28
 */

namespace App;

class Builder
{
	const DEFAULT_MAX_TOTAL = 8;
	const DEFAULT_MAX_IDLE = 8;
	const DEFAULT_MIN_IDLE = 0;

	public $name;
	public $maxTotal;
	public $maxIdle;
	public $minIdle;

	public function __construct()
	{
		$this->minIdle = self::DEFAULT_MIN_IDLE;
		$this->maxTotal = self::DEFAULT_MAX_TOTAL;
		$this->maxIdle = self::DEFAULT_MAX_IDLE;
	}

	public function build()
	{
		if($this->minIdle > $this->maxTotal){
			throw new \Exception("...");
		}
		if($this->minIdle > $this->maxTotal ||
			$this->minIdle > $this->maxIdle){
			throw new \Exception("...");
		}

		return $this;

	}

	public function setName($name)
	{
		if(empty($name)) {
			throw new \Exception("$name can't be empty");
		}
		$this->name = $name;

		return $this;
	}
	public function setMaxTotal($maxTotal)
	{
		if($maxTotal<0)
		{
			throw new \Exception("maxTotal must above zero");
		}
		$this->maxTotal = $maxTotal;

		return $this;

	}
	public function setMaxIdle($maxIdle)
	{
		if($maxIdle<0)
		{
			throw new \Exception("maxIdle must above zero");
		}
		$this->maxIdle = $maxIdle;

		return $this;
	}
	public function setMinIdle($minIdle)
	{
		if($minIdle<0)
		{
			throw new \Exception("minIdle must above zero");
		}
		$this->minIdle = $minIdle;

		return $this;
	}
}