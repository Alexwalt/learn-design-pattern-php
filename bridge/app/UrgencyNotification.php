<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-02
 * Time: 22:16
 */

namespace App;

/**
 * 紧急
 * Class UrgencyNotification
 * @package App
 */
class UrgencyNotification extends Notification
{

	public function notify( $message)
	{
			$this->msgSender->send($message);
	}
}