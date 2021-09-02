<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-02
 * Time: 22:09
 */

namespace App;


class TelephoneSender implements MsgSender
{
	private $telephone;

	public function __construct($telephone)
	{
		$this->telephone = $telephone;
	}

	public function send($message)
	{
		echo "Send $message  $this->telephone by telephone" . PHP_EOL;
	}
}