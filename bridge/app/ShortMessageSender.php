<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-02
 * Time: 22:09
 */

namespace App;

/**
 * 短消息
 * Class ShortMessageSender
 * @package App
 */
class ShortMessageSender implements MsgSender
{
	private $telephone;

	public function __construct($telephone)
	{
		$this->telephone = $telephone;
	}

	public function send($message)
	{
		echo "Send $message  $this->telephone by shot message" . PHP_EOL;
	}
}