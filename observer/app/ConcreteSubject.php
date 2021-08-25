<?php
namespace App;

/**
 * 被观察者实现类
 * Class ConcreteSubject
 * @package App
 */
class ConcreteSubject implements ISubject
{
	/**
	 * @var array
	 */
	protected $observers = [];

	/**
	 * 注册观察者到主题中
	 * @param IObserver $observer
	 */
	public function registerObserver(IObserver $observer)
	{
		$this->observers[] = $observer;
	}

	/**
	 * 删除观察者
	 * @param IObserver $observer
	 */
	public function removeObserver(IObserver $observer)
	{
		if(in_array($observer, $this->observers)){
			$key = array_search($observer,$this->observers,true);
			unset($this->observers[$key]);
		}

	}
	/**
	 * 发送消息
	 * @param $message
	 */
	public function notifyObservers($message)
	{
		foreach($this->observers as $observer){
			$observer->update($message);
		}
	}
}