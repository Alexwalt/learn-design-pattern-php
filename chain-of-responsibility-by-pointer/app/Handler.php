<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-08-07
 * Time: 21:55
 */

namespace App;


abstract class Handler
{
	protected $successor;

	public function setSuccessor($successor){
		$this->successor = $successor;
	}
	public abstract function handle();
}