<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-02
 * Time: 22:08
 */

namespace App;


class EmailSender implements MsgSender
{
	private $email;

	public function __construct($email)
	{
		$this->email = $email;
	}

	public function send($message)
	{
		echo "Send $message to $this->email by email" . PHP_EOL;

	}
}