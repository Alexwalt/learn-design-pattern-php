<?php
namespace App;

class ShotMessageObserver implements IObserver
{
	/**
	 * 获取到通知消息后要执行的动作
	 * @param $message
	 */
	public function update($message)
	{
		echo "User $message has register" . PHP_EOL;
		echo "I will send a shot message to user" . PHP_EOL;
	}
}