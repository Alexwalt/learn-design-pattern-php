<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-02
 * Time: 22:09
 */

namespace App;

/**
 * 微信消息
 * Class WechatSender
 * @package App
 */
class WechatSender implements MsgSender
{
	private $wechatId;

	public function __construct($wechatId)
	{
		$this->wechatId = $wechatId;
	}

	public function send($message)
	{
		echo "Send $message by Wechat $this->wechatId" . PHP_EOL;
	}
}