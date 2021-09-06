<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-05
 * Time: 20:09
 */

namespace App;


interface IMario
{
	public function getStateName();
	public function obtainMushRoom();
	public function obtainCape();
	public function obtainFireFlower();
	public function meetMonster();
}