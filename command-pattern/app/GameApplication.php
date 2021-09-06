<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-06
 * Time: 12:31
 */

namespace App;

/**
 * 模拟个意思，运行不好使
 * Class GameApplication
 * @package App
 */
class GameApplication
{
	const MAX_HANDLED_REQ_COUNT_PER_LOOP = 100;
	protected $queue = [];
	protected $requests = [];
	public function __construct()
	{
		$this->mock();
	}

	public function mock()
	{
		$this->requests[]= Event::GotDiamond;
		$this->requests[]= Event::GotStart;
		$this->requests[]= Event::Archive;
		$this->requests[]= Event::GotStart;
		$this->requests[]= Event::HitObstacle;
	}

	public function mainLoop()
	{
		/**
		 * Master 线程
		 */
		while(true){

			while($request = array_pop($this->requests)){
				$event = $request;
				$command = null;
				if ($event == Event::GotDiamond) {
					$command = new GotDiamondCommand();
				} else if ($event==Event::GotStart) {
					$command = new GotStartCommand();
				} else if ($event == Event::Archive) {
					$command = new ArchiveCommand();
				} else if ($event == Event::HitObstacle) {
					$command = new HitObstacleCommand();
				}
				$this->queue[] = $command;
			}
			/**
			 * worker线程
			 */
			$handledCount = 0;
			while($handledCount < self::MAX_HANDLED_REQ_COUNT_PER_LOOP){
				if(empty($this->queue)){
					break;
				}
				$command = array_pop($this->queue) ;
				$command->execute();
			}
		}
	}
}