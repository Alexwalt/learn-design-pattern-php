<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-08-07
 * Time: 21:56
 */

namespace App;


class HandlerChain
{
	private $head = null;
	private $tail = null;

	public function addHandler(Handler $handler){
		$handler->setSuccessor(null);

		if($this->head ==null){
			$this->head = $handler;
			$this->tail = $handler;
			return ;
		}

		$this->tail->setSuccessor($handler);
		$this->tail = $handler;
	}

	public function handle(){
		if($this->head != null){
			$this->head->handle();
		}
	}
}