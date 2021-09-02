<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-02
 * Time: 22:08
 */

namespace App;


interface MsgSender
{
	public function send($message);
}