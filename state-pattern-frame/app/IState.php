<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-06
 * Time: 08:22
 */

namespace App;


interface IState
{
	public function toStateOne();
	public function toStateTwo();
}