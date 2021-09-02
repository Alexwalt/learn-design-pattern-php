<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-02
 * Time: 22:02
 */

namespace App;


abstract class Notification
{

	protected $msgSender;

	public function __construct(MsgSender $msgSender)
	{
		$this->msgSender = $msgSender;
	}



	abstract public function notify($message);

}