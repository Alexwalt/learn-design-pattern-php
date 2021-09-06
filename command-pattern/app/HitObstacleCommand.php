<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-06
 * Time: 12:29
 */

namespace App;


class HitObstacleCommand implements Command
{
	public function execute()
	{
		echo __CLASS__ . PHP_EOL;
	}
}