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

	private $handlers = [];
	public function addHandler(Handler $handler){
		$this->handlers[] = $handler;

	}

	public function handle(){
		for($i=0; $i<count($this->handlers); $i++){
			$this->handlers[$i]->handle();
		}
	}
}