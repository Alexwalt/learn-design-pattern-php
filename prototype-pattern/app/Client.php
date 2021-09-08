<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-06
 * Time: 16:18
 */

namespace App;


class Client
{
	private $fly1;
	private $fly2;

	private $c1Fly;
	private $c2Fly;
	private $updatedCloneFly;

	public function __construct()
	{
		//实例化
		$this->fly1 = new MaleProto();
		$this->fly2 = new FemaleProto();

		//克隆
		$this->c1Fly = clone $this->fly1;
		$this->c2Fly = clone $this->fly2;
		$this->updatedCloneFly = clone $this->fly2;

		//更新克隆
		$this->c1Fly->mated = true;
		$this->c2Fly->fecundity = 180;
		$this->updatedCloneFly->eyeColor = 'purple';
		$this->updatedCloneFly->wingBeat = 220;
		$this->updatedCloneFly->unitEyes = 750;
		$this->updatedCloneFly->fecundity = 90;

		//通过类型提示方法发送
		$this->showFly($this->c1Fly);
		$this->showFly($this->c2Fly);
		$this->showFly($this->updatedCloneFly);


	}

	private function showFly(IPrototype $fly)
	{
		echo "eye color " . $fly->eyeColor . PHP_EOL;
		echo "wing beats " . $fly->wingBeat . PHP_EOL;
		echo "eye units " . $fly->unitEyes . PHP_EOL;
		$genderNow = $fly::gender;
		echo "Gender  " .$genderNow . PHP_EOL;
		if($genderNow == "FEMALE"){
			echo "Number of eggs ". $fly->fecundity . PHP_EOL;
		} else {
			echo "Mated: " . $fly->mated . PHP_EOL;
		}
	}
}