<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-02
 * Time: 22:17
 */

namespace App;


class SevereNotification extends Notification
{

	public function notify( $message)
	{
		$this->msgSender->send($message);
	}
}