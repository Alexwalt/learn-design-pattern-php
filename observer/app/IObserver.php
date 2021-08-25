<?php
namespace App;

/**
 * 观察者接口
 * Interface IObserver
 * @package App
 */
interface IObserver
{
	/**
	 * 获取到通知消息后要执行的动作
	 * @param $message
	 */
    public function update($message);
}