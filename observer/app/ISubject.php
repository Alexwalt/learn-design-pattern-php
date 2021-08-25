<?php

namespace App;

/**
 * 被观察者接口（主题）
 * Interface ISubject
 * @package App
 */
interface ISubject
{
	/**
	 * 注册观察者到主题中
	 * @param IObserver $observer
	 */
	public function registerObserver(IObserver $observer);

	/**
	 * 删除观察者
	 * @param IObserver $observer
	 */
	public function removeObserver(IObserver $observer);

	/**
	 * 发送消息
	 * @param $message
	 */
	public function notifyObservers($message);
}